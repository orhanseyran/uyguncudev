<?php

namespace App\Http\Controllers;

use App\Models\orderdetail;
use Illuminate\Http\Request;

class ArrayOparationController extends Controller
{
    /* Array işlemleri */

    public function show($name)
    {
        call_user_func(get_class($this) . '::' . $name); # code...
    }

     function pluck()
    {
        $orderdetail = orderdetail::pluck("per_price");
        return view("home",compact("orderdetail"));

    }
    function map(){
            orderdetail::get()->map(function($item){
           $yeni= $item->extra_aciklama =$item->sub_total == 100 ? 'görev tamamlandi ' : 'görev tamamlanamadı';

        });


    }
    function search(){
        $orderdetail = orderdetail::get();
        $search = $orderdetail->search(function($item){

            return $item->sub_total==50;

        });
        dd($search);
    }
}
