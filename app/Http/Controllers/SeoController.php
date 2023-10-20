<?php

namespace App\Http\Controllers;

use App\Models\seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function seo(){
        $seo = seo::latest()->get();
        return view("admin.seo",compact("seo"));
    }
    public function seoaddpage(){
        return view("admin.seoadd");
    }
    public function seoedit($id){
        $seo = seo::findorfail($id);

        return view("admin.seoedit", compact("seo"));
    }
    public function seoadd(Request $request){
        $seo = new seo();
        $seo->sayfa = $request->sayfa;
        $seo->BladeAdı	 = $request->BladeAdı;
        $seo->anahtar_kelime = $request->anahtar_kelime;
        $seo->meta_açıklama = $request->meta_açıklama;
        $seo->save();

        return redirect()->back()->with("success","Seo Ayarı Başarıyla Eklendi");

    }
    public function seoupdate(Request $request, $id){
        $seo = seo::findorfail($id);
        $seo->sayfa = $request->sayfa;
        $seo->BladeAdı	 = $request->BladeAdı;
        $seo->anahtar_kelime = $request->anahtar_kelime;
        $seo->meta_açıklama = $request->meta_açıklama;
        $seo->update();

        return redirect()->back()->with("success","Seo Ayarı Başarıyla Düzenlendi");

    }
    public function seodelete($id){
        $seodelete = seo::findorfail($id);
        $seodelete->delete();
        return redirect()->back()->with("success","Seo Ayarı Başarı İle Silindi");
}
}
