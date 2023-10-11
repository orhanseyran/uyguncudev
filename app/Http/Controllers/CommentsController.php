<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\product;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function commentadd(Request $request,$id){
        $product =product::FindOrFail($id);
        $comment = new Comments();
        $comment->ad = $request->ad;
        $comment->soyad = $request->soyad;
        $comment->email = $request->email;
        $comment->yorum = $request->yorum;
        $comment->puan = $request->puan;
        $comment->urun_id = $product->id;
        $comment->urun = $product->baslik;

        $comment->save();
        session()->flash("basarı","Yorumunuz Başarıyla Eklendi");
        return redirect()->back();
    }
}
