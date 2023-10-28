<?php

namespace App\Http\Controllers;

use App\Models\kupon;
use App\Models\product;
use App\Models\seo;
use App\Models\header;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use ShoppingCart;

class ShoppingCartController extends Controller
{
    public function cart()//Sepet Sayfası
    {
        $header = header::latest()->first();
        $yeni = ShoppingCart::all();
        $seo = seo::where("BladeAdı", "Sepet" )->first();

        if(ShoppingCart::total() == null){
            session()->forget('coupon_applied');
        }

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

        return view("cart",compact("yeni","sayfa","anahtar_kelime","meta_açıklama","header"));

    }
    public function cupon(Request $request) {
        $couponCode = $request->input('coupon_code');
        $coupon = kupon::where('code', $couponCode)->first();

        if ($coupon) {
            $yeni = ShoppingCart::all();
            $indirim = $coupon->discount_percentage;

            $couponAlreadyApplied = session()->get('coupon_applied', false);

            if (!$couponAlreadyApplied) {
                foreach ($yeni as $key) {
                    $discountAmount = ($key->price * $indirim) / 100;
                    $tutar = $key->price - $discountAmount;
                    $key->price = $tutar;
                }

                session(['coupon_applied' => true]);
                session()->flash('basarı', 'Kupon Başarıyla Uygulandı');
            } else {
                session()->flash('basarı', 'Kupon zaten kullanılmış.');
            }
        }




        return redirect()->back();
    }

    public function addtocart(Request $request, $id)
    {
        $yeni = product::FindOrFail($id);

        if ($request->input("fast")) {
            if ($request->input("qty") == 0) {
                session()->flash("hata","Geçerli Ürün Mikatı Giriniz");
                return redirect()->back();
            } else {
                ShoppingCart::add($yeni->id,$yeni->baslik, $request->input("qty"),$yeni->fiyat,["image"=>$yeni->resim,"user_id"=>$yeni->user->id]); //direk ödeme
                return redirect(route("cart"));
            }
        }
        if ($request->input("hızlı")) {
            if ($request->input("qty") == 0) {
                session()->flash("hata","Geçerli Ürün Mikatı Giriniz");
                return redirect()->back();
            }
            else{
                ShoppingCart::add($yeni->id,$yeni->baslik,$request->input("qty"),$yeni->fiyat,["image"=>$yeni->resim,"user_id"=>$yeni->user->id]);
                return redirect(route("checkout"));
            }

        } else {
            session()->flash("hata","Geçerli Ürün Mikatı Giriniz");
            return redirect()->back();
        }

    }
    public function addtocartnormal($id){
        $yeni = product::findorfail($id);
        ShoppingCart::add($yeni->id,$yeni->baslik, 1,$yeni->fiyat,["image"=>$yeni->resim,"user_id",$yeni->user->id]);
        return redirect(route("cart"));
    }
    public function checkout($id)
    {

        $yeni = product::FindOrFail($id);

        ShoppingCart::add($yeni->id,$yeni->baslik,1,$yeni->fiyat,["image"=>$yeni->resim,"user_id",$yeni->user->id]);

        return redirect(route("checkout"));
    }
    public function updatecart($rawId,$type)
    {
        $yeni=ShoppingCart::get($rawId);

        if (!$yeni) {
            // Handle the case where the item is not found in the shopping cart.
            return redirect()->back()->with("error", "Ürün bulunamadı.");
        }

        if ($type == "increase"){
            ShoppingCart::update($rawId,$yeni->qty+1);
            session()->flash("basarı","Sepetinize Yeni Ürün Eklendi");
        }
        else{
            if ($yeni->qty == 1 ) {
                ShoppingCart::update($rawId,$yeni->qty-1);
                return redirect()->back();
                session()->flash("basarı","Sepetiniz Boş");
            } else {
                ShoppingCart::update($rawId,$yeni->qty-1);
                session()->flash("basarı","Sepetinizden Ürün Çıkarıldı");
            }


        }



        return redirect()->back();
    }

    public function removecart($rawId)
    {
        ShoppingCart::remove($rawId);
        session()->flash("basarı","Ürün Başarıyla Sepetten Silindi");
        return redirect()->back();

    }
    public function destroycart(){
        ShoppingCart::destroy();
        return redirect()->back();
    }
}
