<?php

namespace App\Http\Controllers;
use App\Models\blog;
use App\Models\CommentsBlog;
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
        $latest = Blog::latest()->limit(5)->get();
        $random = Blog::inRandomOrder()->limit(5)->get();

        $comments = $getir->yorumlar()->latest()->get();
        $yanıt = $getir->reply()->get();

        return view("blog-details",compact("yeni","getir","latest","random","comments"));
    }
}
