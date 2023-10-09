<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use ShoppingCart;

class ShoppingCartController extends Controller
{
    public function cart()//Sepet Sayfası
    {
        $yeni = ShoppingCart::all();

        return view("cart",compact("yeni"));

    }

    public function addtocart(Request $request, $id)
    {
        $yeni = product::FindOrFail($id);

        ShoppingCart::add($yeni->id,$yeni->baslik,$request->input("qty"),$yeni->fiyat,["image"=>$yeni->resim,"user_id",$yeni->user->id]);

        return redirect(route("cart"));
    }
    public function checkout($id)
    {
        $yeni = product::FindOrFail($id);

        ShoppingCart::add($yeni->id,$yeni->baslik,1,$yeni->fiyat,["image"=>$yeni->resim,"user_id",$yeni->user->id]);

        return redirect(route("checkout"));
    }
    public function updatecart($rawId,$type)
    {
        $yeni=ShoppingCart::get($rawId);

        if ($type == "increase"){
            ShoppingCart::update($rawId,$yeni->qty+1);
            session()->flash("basarı","Sepetinize Yeni Ürün Eklendi");
        }
        else{
            ShoppingCart::update($rawId,$yeni->qty-1);
            session()->flash("basarı","Sepetinizden Ürün Çıkarıldı");
        }



        return redirect()->back();
    }

    public function removecart($rawId)
    {
        ShoppingCart::remove($rawId);
        session()->flash("basarı","Ürün Başarıyla Sepetten Silindi");
        return redirect()->back();
    }
}
