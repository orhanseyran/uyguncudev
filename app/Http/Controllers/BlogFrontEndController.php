<?php

namespace App\Http\Controllers;
use App\Models\blog;
use Illuminate\Http\Request;
use ShoppingCart;
class BlogFrontEndController extends Controller
{
    public function blog(){
        $yeni = ShoppingCart::all();
        $getir = Blog::latest()->paginate(10); // Sayfa başına 10 blog göster

        return view("blog-grid", compact("yeni", "getir"));
    }
    public function blogdetail($id){

        $yeni = ShoppingCart::all();
        $getir = blog::findorfail($id);

        return view("blog-details",compact("yeni","getir"));
    }
}
