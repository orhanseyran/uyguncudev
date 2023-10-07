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

        // Sonuçları al
        $products = $query->latest()->limit(10)->get();

        // Temizleme işlemi
        $temizle = $request->input('Temizle');

        if ($temizle) {
            return redirect()->route('shop');
        }

        return view('shop', compact('products'));
    }

}
