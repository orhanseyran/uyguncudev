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
        $person=collect(["name"=>"Orhan","Soyad"=>"Seyran"]);



        return view("home",compact("product","cart","person"));
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
    public function search(Request $request)
    {


    $orderByColumn = $request->input('yeni', 'id'); // Varsayılan sıralama sütunu "id"
    $orderByColumn = $request->input('yeni', 'total_price'); // Varsayılan sıralama sütunu "id"
    $orderByDirection = $request->input('orderByDirection', 'asc'); // Varsayılan sıralama yönü "asc"

    // Sıralama işlemi
    $orderBy = orders::orderBy($orderByColumn, $orderByDirection)->get();

    // Sonucu görüntülemek için view'e döndür
    return view("yeni", compact("orderBy"));


    }
}
