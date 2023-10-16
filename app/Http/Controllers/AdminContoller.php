<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Kategori;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\ürünboyut;
use App\Models\ürünrenk;
use App\Models\User;
use App\Models\orderdetail;

class AdminContoller extends Controller
{
    public function homeadmin()
    {
        return view("admin.homeadmin");
    }
    public function products(){

        $getir = product::latest()->get(); //en son eklenen ürünü getir

        return view("admin.products",compact("getir")); //compact ile $getir değişkenini admin.products gönder

    }
    public function productadd(){
        $size = ürünboyut::latest()->get();
        $color = ürünrenk::latest()->get();
        $kategori = kategori::latest()->get();
        $getir = Kategori::latest()->get(); //en son eklenen kategori getir
        return view("admin.productadd",compact("getir","size","color","kategori")); //compact ile $getir değişkenini admin.products gönder
    }
    public function productedit($id){
        $size = ürünboyut::latest()->get();
        $kategori = kategori::latest()->get();
        $color = ürünrenk::latest()->get();
        $getir = product::findorfail($id);
        return view("admin.productedit",compact("getir","size","color","kategori"));

    }
    public function ürünboyut(){
        $size = ürünboyut::latest()->get();
        return view("admin.size",compact("size"));
    }
    public function ürünboyutadd(){
        $size = ürünboyut::latest()->get();
        return view("admin.sizeadd",compact("size"));
    }
    public function ürünboyutedit($id){
        $size = ürünboyut::findorfail($id);
        return view("admin.sizeedit",compact("size"));
    }
    public function ürünrenk(){
        $size = ürünrenk::latest()->get();
        return view("admin.color",compact("size"));
    }
    public function ürünrenkadd(){
        $size = ürünrenk::latest()->get();
        return view("admin.coloradd",compact("size"));
    }
    public function ürünrenkedit($id){
        $size = ürünrenk::findorfail($id);
        return view("admin.coloredit",compact("size"));
    }
    public function kategorigetir(){
        $getir = Kategori::latest()->get();
        return view("admin.catagories",compact("getir"));
    }
    public function katagoridüzenle($id){
        $getir = Kategori::findorfail($id);
        return view("admin.categoryaddedit",compact("getir"));

    }
    public function kategoriekleme(){
        return view("admin.categoryadd");
    }
    public function comments(){
        return view("admin.comments");
    }
    public function users(){
        $getir = User::latest()->get();
        return view("admin.users",compact("getir"));
    }
    public function usr($id){
        $getir = User::findorfail($id);
        return view("admin.usersedit",compact("getir"));
    }
    public function usersdelete($id){
        $getir = User::findorfail($id);
        $getir->delete();
        return redirect()->back();
    }
    public function blogs(){
       $getir = blog::latest()->get();
       return view("admin.blogs",compact("getir"));
    }
    public function blogekle(){
        return view("admin.blogadd");
    }
    public function blogedit($id){
        $getir = blog::findorfail($id);
        return view("admin.blogedit",compact("getir"));
    }
    public function blogsil($id){
        $getir = blog::findorfail($id);
        $getir->delete();
        return view("admin.blogedit",compact("getir"));
    }
    public function orders(){
        $getir = orderdetail::latest()->get();

        return view("admin.orders",compact("getir"));
    }
    public function ordersid($id){
        $getir = orderdetail::findorfail($id);
        return view("admin.orderdetail",compact("getir"));
    }


}
