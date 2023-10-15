<?php

namespace App\Http\Controllers;

use App\Models\subscribe;
use App\Models\User;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function subscribe(Request $request){
        if (!auth()->check()) {
            $abone = new subscribe();
            $abone->email = $request->input("email");
            $abone->name = "Siteye Üye Olmayan Kullanıcı";
            $abone->user_id = 0;

            $user = User::where("email",$request->input("email"))->first();
            if($user){
                session()->flash("error","Bültene Daha Önceden Bu Mail İle Kayıt Olunmuş");
                return redirect()->back();
            }
            else{
                $abone->save();
                session()->flash("success","Bültene Anonim Olarak Abone Oldunuz");
                return redirect()->back();
            }

        } else {
            $username = auth()->user()->name;
            $userid = auth()->user()->id;

            $abone = new subscribe();
            $abone->email = $request->input("email");
            $abone->name = $username;
            $abone->user_id = $userid;
            $user = User::where("email",$request->input("email"))->first();
            if($user){
                session()->flash("error","Bültene Daha Önceden Bu Mail İle Kayıt Olunmuş");
                return redirect()->back();
            }
            else{
                $abone->save();
                session()->flash("success","Bültene Üyelik Bilgileriniz İle Abone Oldunuz");
                return redirect()->back();
            }

            # code...
        }

    }
}
