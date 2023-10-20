<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use App\Models\orderdetail;
use App\Models\orders;
use App\Models\pay;
use App\Models\seo;
use App\Models\product;
use App\Models\shopier as ModelsShopier;
use phpDocumentor\Reflection\Types\Array_;
use Shopier\Enums\ProductType;
use Shopier\Enums\WebsiteIndex;
use Shopier\Exceptions\NotRendererClassException;
use Shopier\Exceptions\RendererClassNotFoundException;
use Shopier\Exceptions\RequiredParameterException;
use Shopier\Models\Address;
use Shopier\Models\Buyer;
use Shopier\Renderers\AutoSubmitFormRenderer;
use Shopier\Renderers\ButtonRenderer;
use Shopier\Models\ShopierResponse;
use Shopier\Shopier;
use ShoppingCart;
use Illuminate\Http\Request;

class CheakOutController extends Controller
{
    public function checkout()
    {
        $yeni = ShoppingCart::all();
        $seo = seo::where("BladeAdı", "Ödeme" )->first();

        if($seo){
            $sayfa = $seo->sayfa;
            $anahtar_kelime = $seo->anahtar_kelime;
            $meta_açıklama = $seo->meta_açıklama;
        }
        else{
            $sayfa = " ";
            $anahtar_kelime = " ";
            $meta_açıklama = " ";
        }
        return view("checkout",compact("yeni","sayfa","anahtar_kelime","meta_açıklama"));

    }
    public function store(Request $request){

        if ($request->input("shopier")) {
            $order = new orders();
            if ($order->user_id == null) {
                //kullanıcı giriş yapmamiş ise
                $order->user_id = 0;
            } else {
                //giriş yapmiş ise
                $order->user_id= auth()->user()->id;
            }
            $order->total_price = ShoppingCart::totalPrice();

            $order->payment_method="shopier";
            $order->save();

            // E-posta gönderme işlemi


            $sipariş = ShoppingCart::all();
            Mail::to($request->email)->send(new OrderMail($sipariş));
            foreach ($sipariş as $al) {

                $orderdetail =  new orderdetail();

                $orderdetail->fill($request->all());
                $orderdetail->product_id = $al->id;
                $orderdetail->per_price = $al->price;
                $orderdetail->urun_adı = $al->name;
                $orderdetail->user_id = auth()->check() ?  auth()->user()->id : 0 ;
                $orderdetail->qty = $al->qty;
                $orderdetail->sub_total = $al->price * $al->qty ;


                //sipariş sayısına göre ürüne sipariş sayısı ekleme

                $product = product::find($al->id);

                if($product){
                    $product->order_count = $product->order_count +1;
                    $product->update();
                }

                $orderdetail->save();



                define('API_KEY', '4b98b4af1280065d600e4a9e97c42e08');
                define('API_SECRET', '093cac914803da610e635d6d1e53e50f');

                $shopier = new Shopier(API_KEY, API_SECRET);

                // Satın alan kişi bilgileri
                $buyer = new Buyer([
                    'id' => auth()->check() ?  auth()->user()->id : 0 ,
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'email' => $request->email,
                    'phone' => $request->phone,
                ]);


                // Fatura ve kargo adresi birlikte tanımlama
                // Ayrı ayrı da tanımlabilir
                $address = new Address([
                    'address' => $request->adress,
                    'city' => $request->city,
                    'country' => $request->phone,
                    'postcode' => '56565',
                ]);


                // shopier parametlerini al
                $params = $shopier->getParams();

                // Satın alan kişi bilgisini ekle
                $params->setBuyer($buyer);

                // Fatura ve kargo adresini aynı şekilde ekle
                $params->setAddress($address);
                // Sipariş numarsı ve sipariş tutarını ekle
                $shopier->setOrderData($orderdetail->id*85, ShoppingCart::totalPrice());

                $shopier->setProductData($orderdetail->urun_adı, ProductType::DOWNLOADABLE_VIRTUAL);


                $renderer = $shopier->createRenderer(AutoSubmitFormRenderer::class);

                $shopier->goWith($renderer);



        }
        }
        else{
            session()->flash("Hata","Lütfen Ödeme Yöntemi Seçiniz");
            return redirect()->back();
        }

    }

    //Geri Dönüş Url Shopier
    public function shopierödeme()
    {

        $shopierResponse = ShopierResponse::fromPostData();
        $post = $_POST;


        if (!$shopierResponse->hasValidSignature(getenv('SHOPIER_API_SECRET'))) {

            $orders = new pay();
            $orders -> orders_id = $post['platform_order_id'];
            $orders -> active = 0;

            $orders->save();
            // TODO: Ödeme başarılı değil, hata mesajı göster
            session()->flash("hata","Ödeme Alınamadı");
            if (!auth()->check()) {
                return redirect()->route("home");
            }

        }
        else{
            $orders = new pay();
            $orders -> orders_id = $post['platform_order_id'];
            $orders -> active = 1;

            $orders->save();
            // TODO: Ödeme başarılı ise, başarı mesajını göster
            session()->flash("hata","Ödeme Başarılı ");
            return redirect()->route("myaccount");
            ShoppingCart::destroy();


        }

        }
}





