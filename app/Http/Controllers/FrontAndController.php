<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\orderdetail;
use App\Models\orders;
use App\Models\product;
use App\Models\Slider;
use App\Models\User;
use App\Models\wishlist;
use Illuminate\Http\Request;
use ShoppingCart;

class FrontAndController extends Controller
{
    public function home(){
        $yeni= ShoppingCart::all();
        $slider = slider::latest()->limit(5)->get();
        $product =product::latest()->limit(10)->get();
        $comments = Comments::latest()->limit(5)->get();
        $rndproduct = product::inRandomOrder()->latest()->limit(8);
        $rndone = product::inRandomOrder()->limit(1)->get();
        return view("home",compact("product","yeni","rndproduct","rndone","comments","slider"));
    }
    public function product(Request $request,$id)
    {
        $yeni= ShoppingCart::all();
        $product = product::FindOrFail($id);

        if ($request->input("fast")) {
            $yeni= ShoppingCart::all();
            ShoppingCart::add($product->id,$product->baslik,1,$product->fiyat,["image"=>$product->resim,"user_id",$product->user->id]);
            return view("checkout",compact("yeni"));
        }
        // $comments = $product->comments()->AktifYorum()->latest()->get();
        $comments = $product->comments()->latest()->get();
        return view("product",compact("product","yeni","comments"));
    }
    public function loginform(){
        return view("sign-in");
    }
    public function hesabım(){

        return view("my-account");

    }
    public function shop(Request $request){
        $yeni=ShoppingCart::all();
        $query = Product::query();

        // Kategori filtresi
        if ($request->filled('kategori') && $request->input('kategori') !== 'Categories') {
            $query->where('kategori', $request->input('kategori'));
        }

        // Renk filtresi
        if ($request->filled('color') && $request->input('color') !== 'Color') {
            $query->where('color', $request->input('color'));
        }

        // Fiyat aralığı filtresi
        if ($request->filled('fiyat') && $request->input('fiyat') !== 'Price Range') {
            $priceRange = explode(' - ', $request->input('fiyat'));
            $query->whereBetween('fiyat', $priceRange);
        }

        // Sıralama
        $sortOptions = [
            'latest' => 'created_at',
            'name' => 'baslik',
            'price' => 'fiyat',
        ];

        $sort = $request->input('sort', 'latest');
        $query->orderBy($sortOptions[$sort] ?? 'created_at', $sort === 'viewed' ? 'desc' : 'asc');

        $qu = $request->input('prod-search');
        $search = Product::where("baslik", "like", "%" .$qu. "%")->get();
        // Sonuçları al
        $products = $query->latest()->limit(10)->get();

        // Temizleme işlemi
        $temizle = $request->input('Temizle');

        if ($temizle) {
            return redirect()->route('shop');
        }
        // arama işlemleri



        return view('shop', compact('products',"search","yeni"));
    }
    public function wishlist(){

        $wihslist = wishlist::list()->latest()->get();

        return view("wishlist",compact("wihslist"));
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
                    $wishlist->price = $product->fiyat;
                    $wishlist->user_name = $user;
                    $wishlist->product_name	= $product->baslik;

                    $wishlist->save();
        }
        return redirect(route("wishlist"));
    }
    public function wishlistdelete($id){

        $wihslist = wishlist::FindOrFail($id);
        $wihslist->delete();

        return redirect()->back();
    }


}
