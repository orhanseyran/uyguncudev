<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\CommentsBlog;
use App\Models\product;
use App\Models\blog;
use App\Models\reply_comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function commentadd(Request $request,$id){
        $picture = auth()->user()->resim;
        $product =product::FindOrFail($id);
        $comment = new Comments();
        $comment->ad = $request->ad;
        $comment->soyad = $request->soyad;
        $comment->email = $request->email;
        $comment->yorum = $request->yorum;
        $comment->puan = $request->puan;
        $comment->urun_id = $product->id;
        $comment->urun = $product->baslik;
        if (auth()->user()->resim = null) {
            $comment->resim = "user.png";
        } else {
            $comment->resim = $picture;
        }
        $comment->save();
        session()->flash("basarı","Yorumunuz Başarıyla Eklendi");
        return redirect()->back();
    }

    public function commentblogadd(Request $request,$id){
        $blog = blog::findorfail($id);
        $comment = new CommentsBlog();
        $comment->ad = $request->ad;
        $comment->email = $request->email;
        $comment->yorum = $request->yorum;
        $comment->blog_id = $blog->id;

        $comment->save();
        session()->flash("basarı","Yorumunuz Başarıyla Eklendi");
        return redirect()->back();
    }
    public function replycomment(Request $request ,$id){
        $comments = CommentsBlog::findorfail($id);
        $comment = new reply_comment();
        $comment->ad = $request->ad;
        $comment->email = $request->email;
        $comment->yorum = $request->yorum;
        $comment->reply_id = $comments->id;
        $comment->save();
        session()->flash("basarı","Yoruma Yanıt Eklendi");
        return redirect()->back();


    }
}
