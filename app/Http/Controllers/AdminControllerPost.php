<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\product;
use App\Models\UrunResim;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Intervention\Image\Facades\Image;

class AdminControllerPost extends Controller
{
    //ürün eklemem post işlemi
    public function productpost(Request $request){

        $orderadd = new product();
        $orderadd -> baslik = $request->baslik;
        $orderadd -> aciklama = $request->aciklama;
        $orderadd -> resim = $request->resim;
        $orderadd -> kategori = $request->kategori;
        $orderadd -> meta = $request->meta;
        $orderadd -> meta_aciklama = $request->meta_aciklama;
        $orderadd -> fiyat = $request->fiyat;
        $orderadd->user_id = auth()->id();
        $orderadd->username= auth()->user()->name;

        if ($request->hasFile("resim")) {

            $resim = $request->file("resim");
            $resimAdi = time().".".$resim->getClientOriginalExtension();//rastegele resime ad oluştur
            $resimYolu = public_path("resimler/",$resimAdi);
            $resim->move(public_path("resimler"),$resimAdi);

            $orderadd->resim = $resimAdi;

            $imageKucuk = Image::make(public_path("resimler/".$orderadd->resim));
            $imageKucuk ->resize(276,276);
            $imageKucuk->save(public_path("resimler/kucuk".$orderadd->resim));

            $imageKucuk = Image::make(public_path("resimler/".$orderadd->resim));
            $imageKucuk ->resize(276,276);
            $imageKucuk->save(public_path("resimler/orta".$orderadd->resim));

            $imageKucuk = Image::make(public_path("resimler/".$orderadd->resim));
            $imageKucuk ->resize(276,276);
            $imageKucuk->save(public_path("resimler/büyük".$orderadd->resim));
            # code...
        }

        if ($request->hasFile("resimler")) {
            foreach ($request->file('resimler') as $resim) {
                $resimAdi = time() . '_' . $resim->getClientOriginalName(); // Her resim için benzersiz bir isim oluşturabilirsiniz.
                $resimYolu = public_path('resimler/' . $resimAdi);
                $resim->move(public_path('resimler'), $resimAdi); // Resmi klasöre taşı
                $urunResim = new UrunResim();
                $urunResim->urun_id = $orderadd->id; // İlgili ürünün ID'sini ata
                $urunResim->resim_adi = $resimAdi;

                $urunResim->save();
            }
            # code...
        }

        $orderadd->save();
        session()->flash("basarı","Urun Başarıyla Eklendi");
        return redirect()->back();

    }
    //ürün post düzenleme işlemi
    public function productedit(Request $request,$id){
        $orderadd = product::findOrFail($id);

        if (!$orderadd) {
            return redirect()->back()->with("error","Urun Bulunamadı");

        }

        $orderadd-> baslik = $request->baslik;
        $orderadd->aciklama = $request->aciklama;
        $orderadd->resim = $request->resim;
        $orderadd->kategori = $request->kategori;
        $orderadd->meta = $request->meta;
        $orderadd->meta_aciklama = $request->meta_aciklama;
        $orderadd->fiyat = $request->fiyat;
        $orderadd->user_id = auth()->id();
        $orderadd->username = auth()->user()->name;

        if ($request->hasFile("resim")) {

            $resim = $request->file("resim");
            $resimAdi = time().".".$resim->getClientOriginalExtension();

            $resim->move(public_path("resimler"),$resimAdi);

            $orderadd->resim = $resimAdi;

            $imageKucuk = Image::make(public_path("resimler/".$orderadd->resim));
            $imageKucuk ->resize(276,276);
            $imageKucuk->save(public_path("resimler/kucuk".$orderadd->resim));

            $imageKucuk = Image::make(public_path("resimler/".$orderadd->resim));
            $imageKucuk ->resize(276,276);
            $imageKucuk->save(public_path("resimler/orta".$orderadd->resim));

            $imageKucuk = Image::make(public_path("resimler/".$orderadd->resim));
            $imageKucuk ->resize(276,276);
            $imageKucuk->save(public_path("resimler/büyük".$orderadd->resim));
            # code...
        }

        if ($request->hasFile("resimler")) {
            foreach ($request->file('resimler') as $resim) {
                $resimAdi = time() . '_' . $resim->getClientOriginalName(); // Her resim için benzersiz bir isim oluşturabilirsiniz.
                $resimYolu = public_path('resimler/' . $resimAdi);
                $resim->move(public_path('resimler'), $resimAdi); // Resmi klasöre taşı
                $urunResim = new UrunResim();
                $urunResim->urun_id = $orderadd->id; // İlgili ürünün ID'sini ata
                $urunResim->resim_adi = $resimAdi;

                $urunResim->save();
            }
            # code...
        }

        $orderadd->save();

        return redirect()->back();

    }
    //ürün delete işlemi

    public function delete($id){
        product::find($id)->delete();
        return redirect()->back();
    }

    public function kategoriekle(Request $request){
        $kategori = new Kategori();
        $kategori -> kategori_name = $request ->kategori_name;
        $kategori -> kategori_resim = $request ->kategori_resim;

        if ($request->hasFile("resim")) {
            $kategori_resim = $request->file("resim");
            $resimAdi = time().".".$kategori_resim->getClientOriginalExtension();
            $resimYolu = public_path("resimler/".$resimAdi);
            $kategori_resim->move(public_path("resimler"),$resimAdi);

            $kategori->kategori_resim = $resimAdi;

            $imageKucuk = Image::make(public_path('resimler/' . $kategori->kategori_resim));
            $imageKucuk->resize(64, 64);
            $imageKucuk->save(public_path('resimler/' . 'icon_' . $kategori->kategori_resim));

        }
        $kategori->save();

        session()->flash("basarı","Kategori Başarıyla eklendi");
        return redirect()->back();

    }

    }

