<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use App\Models\Contact;
use App\Models\seo;
use App\Models\header;
use ShoppingCart;
use Illuminate\Http\Request;
use App\Mail\contacts;

class ContactController extends Controller
{
    public function contact(){

        $yeni = ShoppingCart::all();
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
        return view("contact",compact("yeni","sayfa","anahtar_kelime","meta_açıklama","header"));
    }
    public function contactpost(Request $request){

        $contact = new Contact();

        $contact -> ad = $request->ad;
        $contact -> telefon = $request->telefon;
        $contact -> mail = $request->mail;
        $contact -> mesaj = $request->mesaj;
        $saveSuccess = $contact->save();

        $saveSuccess = $contact->save();

    if ($saveSuccess) {
        // Send an email to the user
        Mail::to($contact->mail)->send(new contacts($contact));

        // Flash a success message to the session
        session()->flash("basarı", "Mesajınız İletildi. En Kısa Süre İçinde Size Geri Dönüş Sağlayacağız");
    } else {
        // Handle the case where saving to the database failed
        session()->flash("hata", "Mesajınız İletilemedi. Lütfen tekrar deneyin.");
    }
        return redirect(route("contact"));


    }
}
