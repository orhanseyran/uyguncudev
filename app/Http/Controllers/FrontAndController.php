<?php

namespace App\Http\Controllers;

use App\Models\orderdetail;
use App\Models\orders;
use App\Models\product;
use Illuminate\Http\Request;
use ShoppingCart;

class FrontAndController extends Controller
{
    public function home(){
        $cart= ShoppingCart::all();

        $product =product::latest()->limit(10)->get();








        return view("home",compact("product","cart"));
    }
    public function product($id)
    {
        $cart= ShoppingCart::all();
        $product = product::FindOrFail($id);
        return view("product",compact("product","cart"));
    }
    public function loginform(){
        return view("sign-in");
    }
    public function hesabım(){

        return view("my-account");

    }
    public function shop(Request $request){
        $product =product::latest()->limit(10)->get();
        $query = Product::query();


        // Kategori filtresi
        if ($request->has('kategori') && $request->input('kategori') !== 'Categories') {
            $query->where('kategori', $request->input('kategori'));
        }

        // Renk filtresi
        if ($request->has('color') && $request->input('color') !== 'Color') {
            $query->where('color', $request->input('color'));
        }

        // // Fiyat aralığı filtresi
        // if ($request->has('fiyat') && $request->input('fiyat') !== 'fiyat') {
        //     $priceRange = explode(' - ', $request->input('fiyat'));
        //     $query->whereBetween('fiyat', $priceRange);
        // }



        $products = $query->get();

        $Temizle = $request->input("Temizle");

        if ($Temizle) {
            return redirect()->route("shop");
        }

        return view('shop', compact('products',"product"));

    }

}
