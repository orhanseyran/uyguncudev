<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\product;


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
        $getir = Kategori::latest()->get(); //en son eklenen kategori getir
        return view("admin.productadd",compact("getir")); //compact ile $getir değişkenini admin.products gönder
    }
    public function productedit($id){
        $getir = product::findorfail($id);
        return view("admin.productedit",compact("getir"));

    }
    public function kategorigetir(){
        $getir = Kategori::latest()->get();
        return view("admin.catagories",compact("getir"));
    }
    public function kategoriekleme(){
        return view("admin.categoryadd");
    }

}
