<?php

namespace App\Http\Controllers;

use App\Models\aboutus;
use App\Models\Comments;
use App\Models\component;
use App\Models\header;
use App\Models\Kategori;
use App\Models\orderdetail;
use App\Models\orders;
use App\Models\product;
use App\Models\Slider;
use App\Models\User;
use App\Models\seo;
use App\Models\wishlist;
use Illuminate\Http\Request;
use ShoppingCart;

class FrontAndController extends Controller
{

    public function home(Request $request){
        $yeni= ShoppingCart::all();
        $slider = slider::latest()->limit(5)->get();
        $product =product::latest()->limit(10)->get();
        $comments = Comments::latest()->limit(5)->get();
        $productscount = Product::orderBy('order_count', 'desc')->take(10)->get();
        $rndproduct = product::inRandomOrder()->latest()->limit(8);
        $rndone = product::inRandomOrder()->limit(1)->get();
        $header = header::latest()->first();
        $kategori = kategori::latest()->get();
        $seo = seo::where("BladeAdı", "AnaSayfa" )->first();

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


        if ($request->input("fast")) {
            $yeni= ShoppingCart::all();
            ShoppingCart::add($product->id,$product->baslik,1,$product->fiyat,["image"=>$product->resim,"user_id",$product->user->id]);
            return view("checkout",compact("yeni"));
        }
        $componentkategori = component::where("kategori","KategoriAlanı")->latest()->first();
        $firsaturun = component::where("kategori","FırsatUrun")->latest()->first();
        $GelenYorumlar = component::where("kategori","GelenYorumlar")->latest()->first();
        return view("home",compact("header","product","yeni","rndproduct","rndone","comments","slider","productscount","sayfa","anahtar_kelime","meta_açıklama","kategori","componentkategori","firsaturun","GelenYorumlar"));
    }


    public function product(Request $request,$id)
    {
        $yeni= ShoppingCart::all();
        $product = product::FindOrFail($id);
        $random = product::inRandomOrder()->limit(10)->get();
        $header = header::latest()->first();

        if ($request->input("fast")) {
            $yeni= ShoppingCart::all();
            ShoppingCart::add($product->id,$product->baslik,1,$product->fiyat,["image"=>$product->resim,"user_id",$product->user->id]);
            return view("checkout",compact("yeni"));
        }
        // $comments = $product->comments()->AktifYorum()->latest()->get();
        $comments = $product->comments()->latest()->get();
        return view("product",compact("product","yeni","comments","header","random"));
    }
    public function loginform(){
        return view("sign-in");
    }
    public function hesabım(){
        $header = header::latest()->first();
        $seo = seo::find(2);
        $yeni=ShoppingCart::all();
        $orders = orderdetail::AktifSipariş()->latest()->get();
        $user = User::user()->get();

        return view("my-account",compact("yeni","orders","user","seo","header"));

    }

    public function shop(Request $request){
        $getir = Kategori::latest()->get();
        $yeni=ShoppingCart::all();
        $products = Product::query();
        $header = header::latest()->first();
        $seo = seo::where("BladeAdı", "Mağaza" )->first();

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

        $kategori = $request->input("kategori");
        $color = $request->input("color");
        $size = $request->input("size");

        if ($kategori !== null && $kategori !== "") {
            $products->where("kategori", $kategori);
        }

        if ($color !== null && $color !== "") {
            $products->where('color', $color);
        }
        if ($size !== null && $size !== "") {
            $products->where('size', $size);
        }

        $filteredProducts = $products->get();
        // Sıralama


        $qu = $request->input('prod-search');
        $search = Product::where("baslik", "like", "%" .$qu. "%")->get();
        // Sonuçları al


        // Temizleme işlemi
        $temizle = $request->input('Temizle');

        if ($temizle) {
            return redirect()->route('shop');
        }
        // arama işlemler

        return view('shop', compact('filteredProducts',"search","yeni","sayfa","anahtar_kelime","meta_açıklama","header","getir"));
    }
    public function wishlist(){
        $header = header::latest()->first();
        if (!auth()->check()) {
            session()->flash("Hata","İstek Listenizi Görebilmek İçin Giriş Yapınız");
            return redirect(route("loginkullanıcı"));
        } else {
            $yeni=ShoppingCart::all();
            $wihslist = wishlist::list()->latest()->get();
            $seo = seo::where("BladeAdı", "Beğeniler" )->first();

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

            return view("wishlist",compact("wihslist","yeni","sayfa","anahtar_kelime","meta_açıklama","header"));
        }



    }

    public function wishlistadd(Request $request,$id){

        if (!auth()->user()) {

            session()->flash("giris","Ürünü beğeni listenize eklemek için giriş yapınız");
            return redirect(route("loginuser"));
        }
        elseif ($request->input("wish")) {
            $product = product::FindOrFail($id);
            $wishlist = new wishlist();
            $user = auth()->user()->name;
            $wishlist->wish_resim = $product->resim;
            $wishlist->urun_id =  $product->id;
            $wishlist->user_name = $user;
            $wishlist->product_name	= $product->baslik;

            if ($product->fiyat == null) {
                $wishlist->price = 0;
            } else {
                $wishlist->price = $product->fiyat;
            }



            $wishlist->save();
        }
        return redirect(route("wishlist"));
    }
    public function wishlistdelete($id){

        $wihslist = wishlist::FindOrFail($id);
        $wihslist->delete();

        return redirect()->back();
    }
    public function about(){
        $header = header::latest()->first();
        $yeni= ShoppingCart::all();
        $about = aboutus::first();
        return view("about-us",compact("yeni","header","about"));
    }


}
