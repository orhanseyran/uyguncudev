<?php

namespace App\Http\Controllers;
use App\Models\footer;
use App\Models\kupon;
use App\Models\orderdetail;
use App\Models\blog;
use App\Models\Kategori;
use App\Models\product;
use App\Models\aboutus;
use App\Models\component;
use App\Models\services;
use App\Models\header;
use App\Models\portfolyo;
use App\Models\UrunResim;
use App\Models\ürünboyut;
use App\Models\ürünrenk;
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
        $orderadd->active = auth()->user()->id;

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

        $orderadd->update();

        return redirect()->back();

    }
    //ürün delete işlemi

    public function delete($id){
        product::find($id)->delete();
        return redirect()->back();
    }

    public function kategoriekle(Request $request){
        $kategori = new Kategori();
        $kategori->katagoriname = $request ->katagoriname;

        // if ($request->hasFile("resim")) {
        //     $kategori_resim = $request->file("resim");
        //     $resimAdi = time().".".$kategori_resim->getClientOriginalExtension();
        //     $resimYolu = public_path("resimler/".$resimAdi);
        //     $kategori_resim->move(public_path("resimler"),$resimAdi);

        //     $kategori->kategori_resim = $resimAdi;

        //     $imageKucuk = Image::make(public_path('resimler/' . $kategori->kategori_resim));
        //     $imageKucuk->resize(64, 64);
        //     $imageKucuk->save(public_path('resimler/' . 'icon_' . $kategori->kategori_resim));

        // }
        $kategori->save();

        session()->flash("basarı","Kategori Başarıyla eklendi");
        return redirect()->back();

    }
    public function katagorisil($id){
        $sil = Kategori::findorfail($id);
        $sil->delete();

    }

    public function coloraddpost(Request $request){
        $coloradd = new ürünrenk();
        $coloradd->color = $request->color;
        $coloradd->save();
        return redirect(route("ürünrenk"));

    }
    public function coloreditpost(Request $request,$id){
        $coloradd = ürünrenk::findorfail($id);
        $coloradd->color = $request->color;
        $coloradd->save();
        return redirect(route("ürünrenk"));


    }
    public function colordeletepost($id){
        $coloradd = ürünrenk::findorfail($id);
        $coloradd->delete();
        return redirect()->back();


    }
    public function sizeaddpost(Request $request){
        $coloradd = new ürünboyut();
        $coloradd->size = $request->size;
        $coloradd->save();
        return redirect()->back();

    }
    public function sizeeditpost(Request $request,$id){
        $coloradd = ürünboyut::findorfail($id);
        $coloradd->size = $request->size;
        $coloradd->save();
        return redirect(route(""));

    }
    public function sizedeletepost($id){
        $coloradd = ürünboyut::findorfail($id);
        $coloradd->delete();

        return redirect()->back();

    }

    public function blogaddpost(Request $request){
        $username = auth()->user()->name;
        $blogadd = new blog();
        $blogadd->baslik = $request->baslik;
        $blogadd->icerik = $request->icerik;
        $blogadd->user_name = $username;

        if ($request->hasFile('resim'))//eğer formdan resim adında bir sorgu varsa
         {
            $resim = $request->file('resim'); //resimi $request den gelen resime eşitle
            $resimAdi = time() . '.' . $resim->getClientOriginalExtension(); //her resim için farklı bir ad oluştur
            $resimYolu = public_path('resimler/' . $resimAdi);//resmi kaydetmek için public de bulunan resimler klasör yolunu kullan
            $resim->move(public_path('resimler'), $resimAdi);//resmi resimler klasörüne kaydet

            // Küçük, orta ve büyük boyutlu resimleri oluştur ve kaydet

            // İlgili ürünün resim sütununu güncelle
            $blogadd->resim = $resimAdi;
        }

        $blogadd->save();

        session()->flash("basarı", "Blog Ekleme İşlemi Başarılı");
        return redirect()->back();


    }

    public function blogaddedit(Request $request,$id){
        $username = auth()->user()->name;
        $blogadd = blog::findorfail($id);
        $blogadd->baslik = $request->baslik;
        $blogadd->icerik = $request->icerikk;
        $blogadd->user_name = $username;

        if ($request->hasFile('resim'))//eğer formdan resim adında bir sorgu varsa
         {
            $resim = $request->file('resim'); //resimi $request den gelen resime eşitle
            $resimAdi = time() . '.' . $resim->getClientOriginalExtension(); //her resim için farklı bir ad oluştur
            $resimYolu = public_path('resimler/' . $resimAdi);//resmi kaydetmek için public de bulunan resimler klasör yolunu kullan
            $resim->move(public_path('resimler'), $resimAdi);//resmi resimler klasörüne kaydet

            // Küçük, orta ve büyük boyutlu resimleri oluştur ve kaydet
            $this->resizeAndSaveImages($resimYolu, $resimAdi);

            // İlgili ürünün resim sütununu güncelle
            $blogadd->resim = $resimAdi;
        }

        $blogadd->save();

        session()->flash("basarı", "Blog Düzenleme başarılı");
        return redirect()->back();


    }
    public function ordersidpost(Request $request ,$id){
        if (auth()->user()->role == "Admin") {
            $getir = orderdetail::findorfail($id);
            $getir->status = $request->status;
            $getir->update();
            return view("admin.orderdetail",compact("getir"));
        } else {
            $getir = orderdetail::AktifSipariş()->findorfail($id);
            $getir->status = $request->status;
            $getir->update();
            return view("admin.orderdetail",compact("getir"));
        }


    }
    public function bizkimizpost(Request $request){
        $tekAbout = new aboutus();
        $tekAbout->baslik = $request->baslik;
        $tekAbout->icerik = $request->icerik;
        $tekAbout->meta = $request->meta;
        $tekAbout->meta_aciklama = $request->meta_aciklama;

        if ($request->hasFile('resim'))//eğer formdan resim adında bir sorgu varsa
        {
           $resim = $request->file('resim'); //resimi $request den gelen resime eşitle
           $resimAdi = time() . '.' . $resim->getClientOriginalExtension(); //her resim için farklı bir ad oluştur
           $resimYolu = public_path('resimler/' . $resimAdi);//resmi kaydetmek için public de bulunan resimler klasör yolunu kullan
           $resim->move(public_path('resimler'), $resimAdi);//resmi resimler klasörüne kaydet

           // Küçük, orta ve büyük boyutlu resimleri oluştur ve kaydet


           // İlgili ürünün resim sütununu güncelle
           $tekAbout->resim = $resimAdi;
       }
       $tekAbout->update();
       session()->flash("basarı", "Biz Kimiz Sayfası Başarı İle Eklendi");
       return redirect()->back();

    }

    public function servicespost(Request $request){
        $services = new services();
        $services->baslik = $request->baslik;
        $services->icerik = $request->icerik;
        $services->meta = $request->meta;
        $services->meta_aciklama = $request->meta_aciklama;

        if ($request->hasFile('resim'))//eğer formdan resim adında bir sorgu varsa
        {
           $resim = $request->file('resim'); //resimi $request den gelen resime eşitle
           $resimAdi = time() . '.' . $resim->getClientOriginalExtension(); //her resim için farklı bir ad oluştur
           $resimYolu = public_path('resimler/' . $resimAdi);//resmi kaydetmek için public de bulunan resimler klasör yolunu kullan
           $resim->move(public_path('resimler'), $resimAdi);//resmi resimler klasörüne kaydet

           // Küçük, orta ve büyük boyutlu resimleri oluştur ve kaydet


           // İlgili ürünün resim sütununu güncelle
           $services->resim = $resimAdi;
       }
       $services->save();
       session()->flash("basarı", "Biz Kimiz Sayfası Başarı İle Eklendi");
       return redirect()->back();

    }
    public function servicesedit(Request $request , $id){
        $services = services::findorfail($id);
        $services->baslik = $request->baslik;
        $services->icerik = $request->icerik;
        $services->meta = $request->meta;
        $services->meta_aciklama = $request->meta_aciklama;

        if ($request->hasFile('resim'))//eğer formdan resim adında bir sorgu varsa
        {
           $resim = $request->file('resim'); //resimi $request den gelen resime eşitle
           $resimAdi = time() . '.' . $resim->getClientOriginalExtension(); //her resim için farklı bir ad oluştur
           $resimYolu = public_path('resimler/' . $resimAdi);//resmi kaydetmek için public de bulunan resimler klasör yolunu kullan
           $resim->move(public_path('resimler'), $resimAdi);//resmi resimler klasörüne kaydet

           // Küçük, orta ve büyük boyutlu resimleri oluştur ve kaydet


           // İlgili ürünün resim sütununu güncelle
           $services->resim = $resimAdi;
       }
       $services->update();
       session()->flash("basarı", "Biz Kimiz Sayfası Başarı İle Eklendi");
       return redirect()->back();

    }
    public function portfolyopost(Request $request){
        $portfolyo = new portfolyo();
        $portfolyo->baslik = $request->baslik;
        $portfolyo->icerik = $request->icerik;
        $portfolyo->meta = $request->meta;
        $portfolyo->meta_aciklama = $request->meta_aciklama;

        if ($request->hasFile('resim'))//eğer formdan resim adında bir sorgu varsa
        {
           $resim = $request->file('resim'); //resimi $request den gelen resime eşitle
           $resimAdi = time() . '.' . $resim->getClientOriginalExtension(); //her resim için farklı bir ad oluştur
           $resimYolu = public_path('resimler/' . $resimAdi);//resmi kaydetmek için public de bulunan resimler klasör yolunu kullan
           $resim->move(public_path('resimler'), $resimAdi);//resmi resimler klasörüne kaydet

           // Küçük, orta ve büyük boyutlu resimleri oluştur ve kaydet


           // İlgili ürünün resim sütununu güncelle
           $portfolyo->resim = $resimAdi;
       }
       if ($request->hasFile("resimler")) {
        foreach ($request->file('resimler') as $resim) {
            $resimAdi = time() . '_' . $resim->getClientOriginalName(); // Her resim için benzersiz bir isim oluşturabilirsiniz.
            $resimYolu = public_path('resimler/' . $resimAdi);
            $resim->move(public_path('resimler'), $resimAdi); // Resmi klasöre taşı
            $urunResim = new UrunResim();
            $urunResim->urun_id = $portfolyo->id; // İlgili ürünün ID'sini ata
            $urunResim->resim_adi = $resimAdi;

            $urunResim->save();
        }
        # code...
    }
       $portfolyo->save();
       session()->flash("basarı", "Portfolyo Eklendi");
       return redirect()->back();

    }
    public function portfolyosedit(Request $request , $id){
        $portfolyo = portfolyo::findorfail($id);
        $portfolyo->baslik = $request->baslik;
        $portfolyo->icerik = $request->icerik;
        $portfolyo->meta = $request->meta;
        $portfolyo->meta_aciklama = $request->meta_aciklama;

        if ($request->hasFile('resim'))//eğer formdan resim adında bir sorgu varsa
        {
           $resim = $request->file('resim'); //resimi $request den gelen resime eşitle
           $resimAdi = time() . '.' . $resim->getClientOriginalExtension(); //her resim için farklı bir ad oluştur
           $resimYolu = public_path('resimler/' . $resimAdi);//resmi kaydetmek için public de bulunan resimler klasör yolunu kullan
           $resim->move(public_path('resimler'), $resimAdi);//resmi resimler klasörüne kaydet

           // Küçük, orta ve büyük boyutlu resimleri oluştur ve kaydet


           // İlgili ürünün resim sütununu güncelle
           $portfolyo->resim = $resimAdi;
       }
       if ($request->hasFile("resimler")) {
        foreach ($request->file('resimler') as $resim) {
            $resimAdi = time() . '_' . $resim->getClientOriginalName(); // Her resim için benzersiz bir isim oluşturabilirsiniz.
            $resimYolu = public_path('resimler/' . $resimAdi);
            $resim->move(public_path('resimler'), $resimAdi); // Resmi klasöre taşı
            $urunResim = new UrunResim();
            $urunResim->urun_id = $portfolyo->id; // İlgili ürünün ID'sini ata
            $urunResim->resim_adi = $resimAdi;

            $urunResim->save();
        }
        # code...
    }
       $portfolyo->update();
       session()->flash("basarı", "Portfolyo Güncellendi");
       return redirect()->back();

    }
    public function headerpost(Request $request){
        $menu = new header();
        $menu->menu1 = $request->menu1;
        $menu->menu2 = $request->menu2;
        $menu->menu3 = $request->menu3;
        $menu->menu4 = $request->menu4;
        $menu->menu5 = $request->menu5;
        if ($request->hasFile('logoimg'))//eğer formdan resim adında bir sorgu varsa
        {
           $resim = $request->file('logoimg'); //resimi $request den gelen resime eşitle
           $resimAdi = time() . '.' . $resim->getClientOriginalExtension(); //her resim için farklı bir ad oluştur
           $resimYolu = public_path('resimler/' . $resimAdi);//resmi kaydetmek için public de bulunan resimler klasör yolunu kullan
           $resim->move(public_path('resimler'), $resimAdi);//resmi resimler klasörüne kaydet

           // Küçük, orta ve büyük boyutlu resimleri oluştur ve kaydet


           // İlgili ürünün resim sütununu güncelle
           $menu->logoimg = $resimAdi;
       }
       $menu->save();
       session()->flash("basarı", "Header Sayfası Başarı İle Eklendi");
       return redirect()->back();
    }
    public function headeredit(Request $request,$id){
        $menu = header::findorfail($id);
        $menu->menu1 = $request->menu1;
        $menu->menu2 = $request->menu2;
        $menu->menu3 = $request->menu3;
        $menu->menu4 = $request->menu4;
        $menu->menu5 = $request->menu5;
        if ($request->hasFile('logoimg'))//eğer formdan resim adında bir sorgu varsa
        {
           $resim = $request->file('logoimg'); //resimi $request den gelen resime eşitle
           $resimAdi = time() . '.' . $resim->getClientOriginalExtension(); //her resim için farklı bir ad oluştur
           $resimYolu = public_path('resimler/' . $resimAdi);//resmi kaydetmek için public de bulunan resimler klasör yolunu kullan
           $resim->move(public_path('resimler'), $resimAdi);//resmi resimler klasörüne kaydet

           // Küçük, orta ve büyük boyutlu resimleri oluştur ve kaydet


           // İlgili ürünün resim sütununu güncelle
           $menu->logoimg = $resimAdi;
       }
       $menu->update();
       session()->flash("basarı", "Header Sayfası Başarı İle Eklendi");
       return redirect()->back();
    }

    public function kuponaddpost(Request $request){
        $kupon = new kupon();
        $kupon->code = $request->code;
        $kupon->discount_percentage = $request->discount_percentage;
        $kupon->save();
        return redirect()->back();


    }
    public function kuponaddedits(Request $request,$id){
        $kupon = kupon::findorfail($id);
        $kupon->code = $request->code;
        $kupon->discount_percentage = $request->discount_percentage;
        $kupon->update();
        return redirect()->back();
    }
    public function componenthomepost(Request $request){
        $validatedData = $request->validate([
            'baslik' => 'required|string',
            'aciklama1' => 'nullable|string',
            'aciklama2' => 'nullable|string',
            'aciklama3' => 'nullable|string',
            'aciklama4' => 'nullable|string',
            'aciklama5' => 'nullable|string',
            'aciklama6' => 'nullable|string',
            'aciklama7' => 'nullable|string',
            'aciklama8' => 'nullable|string',
            'aciklama9' => 'nullable|string',
            'aciklama10' => 'nullable|string',
            'kategori' => 'nullable|string',
            'resim' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Örnek resim validasyonu
            'link' => 'nullable|string',
        ]);

        $component = new component(); // Modeli kullanarak yeni bir örnek oluşturun
        $component->fill($validatedData); // Validasyonu geçen verileri doldurun

        if ($request->hasFile('resim')) {
            $resim = $request->file('resim');
            $resimAdi = time() . '.' . $resim->getClientOriginalExtension();
            $resimYolu = public_path('resimler/' . $resimAdi);
            $resim->move(public_path('resimler'), $resimAdi);

            // Küçük, orta ve büyük boyutlu resimleri oluştur ve kaydet

            // İlgili ürünün resim sütununu güncelle
            $component->resim = $resimAdi;
        }

        $component->save();
        session()->flash("basari", "Veri Başarıyla Eklendi");
        return redirect()->back();
    }
    public function componenthomeditpost(Request $request,$id){
        $validatedData = $request->validate([
            'baslik' => 'required|string',
            'aciklama1' => 'nullable|string',
            'aciklama2' => 'nullable|string',
            'aciklama3' => 'nullable|string',
            'aciklama4' => 'nullable|string',
            'aciklama5' => 'nullable|string',
            'aciklama6' => 'nullable|string',
            'aciklama7' => 'nullable|string',
            'aciklama8' => 'nullable|string',
            'aciklama9' => 'nullable|string',
            'aciklama10' => 'nullable|string',
            'kategori' => 'nullable|string',
            'resim' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Örnek resim validasyonu
            'link' => 'nullable|string',
        ]);

        $component = component::findorfail($id); // Modeli kullanarak yeni bir örnek oluşturun
        $component->fill($validatedData); // Validasyonu geçen verileri doldurun

        if ($request->hasFile('resim')) {
            $resim = $request->file('resim');
            $resimAdi = time() . '.' . $resim->getClientOriginalExtension();
            $resimYolu = public_path('resimler/' . $resimAdi);
            $resim->move(public_path('resimler'), $resimAdi);

            // Küçük, orta ve büyük boyutlu resimleri oluştur ve kaydet

            // İlgili ürünün resim sütununu güncelle
            $component->resim = $resimAdi;
        }

        $component->save();
        session()->flash("basari", "Veri Başarıyla Eklendi");
        return redirect()->back();
    }


}
