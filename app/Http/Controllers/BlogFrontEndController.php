<?php

namespace App\Http\Controllers;
use App\Models\blog;
use App\Models\seo;
use App\Models\header;
use App\Models\CommentsBlog;
use Illuminate\Http\Request;
use ShoppingCart;
class BlogFrontEndController extends Controller
{
    public function blog(){
        $seo = seo::where("BladeAdı", "Blog" )->first();
        $header = header::latest()->first();
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

        $yeni = ShoppingCart::all();
        $getir = Blog::latest()->paginate(10); // Sayfa başına 10 blog göster

        return view("blog-grid", compact("yeni", "getir","sayfa","anahtar_kelime","meta_açıklama","header"));
    }
    public function blogdetail($id){
        $header = header::latest()->first();
        $yeni = ShoppingCart::all();
        $getir = blog::findorfail($id);
        $latest = Blog::latest()->limit(5)->get();
        $random = Blog::inRandomOrder()->limit(5)->get();

        $comments = $getir->yorumlar()->latest()->get();
        $yanıt = $getir->reply()->get();

        return view("blog-details",compact("yeni","getir","latest","random","comments","header"));
    }
}
