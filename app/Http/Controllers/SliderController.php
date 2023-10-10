<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class SliderController extends Controller
{
    public function slider(){
        $slider = slider::latest()->get();

        return view("admin.slider",compact("slider"));
    }
    public function sliderdüzenle($id){
        $slider = slider::FindOrFail($id);
        return view("admin.slideredit",compact("slider"));

    }
    public function sliderdüzen(Request $request,$id)
    {


        // Güncellenecek ürünü veritabanından bul
        $slider = Slider::find($id);

        if (!$slider) {
            // Ürün bulunamazsa hata mesajı ver veya yönlendirme yap
            return redirect()->back()->with('error', 'Ürün bulunamadı.');
        }

        // Eski resmin bilgilerini sakla
        $eskiResimAdi = $slider->picture;
        $slider->baslik = $request->baslik;
        $slider->icerik = $request->icerik;
        $slider->buton = $request->buton;
        $slider->butonlink = $request->butonlink;

        if ($request->hasFile('picture')) {
            // Yeni resim yüklendiyse işleme devam et
            $resim = $request->file('picture');
            $resimAdi = time() . '.' . $resim->getClientOriginalExtension();
            $resimYolu = public_path('resimler/' . $resimAdi);
            $resim->move(public_path('resimler'), $resimAdi);

            // Resmi WebP formatına dönüştür
            $webpPath = public_path('resimler/' . pathinfo($resimAdi, PATHINFO_FILENAME) . '.webp');
            $image = Image::make($resimYolu);
            $image->encode('webp', 80)->save($webpPath);

            // Yeni resmi kaydet ve eski resmi sil
            $slider->picture = pathinfo($webpPath, PATHINFO_FILENAME) . '.webp';
            if ($eskiResimAdi) {
                // Eski resim dosyasını sil
                $eskiResimYolu = public_path('resimler/' . $eskiResimAdi);
                if (file_exists($eskiResimYolu)) {
                    unlink($eskiResimYolu);
                }
            }
        }

        // Değişiklikleri kaydet
        $slider->save();

        session()->flash("basarı", "Slider Başarıyla Güncellendi");

        return redirect()->back();

    }
    public function sliderekle(){
        return view("admin.slideradd");
    }
    public function sliderpost(Request $request)
{
    $slider = new Slider();
    $slider->baslik = $request->baslik;
    $slider->icerik = $request->icerik;
    $slider->picture = $request->picture;
    $slider->buton = $request->buton;
    $slider->butonlink = $request->butonlink;

    if ($request->hasFile('picture')) {
        $resim = $request->file('picture');
        $resimAdi = time() . '.' . $resim->getClientOriginalExtension();
        $resimYolu = public_path('resimler/' . $resimAdi);
        $resim->move(public_path('resimler'), $resimAdi); // Resmi klasöre taşı

        // Resmi WebP formatına dönüştür
        $webpPath = public_path('resimler/' . pathinfo($resimAdi, PATHINFO_FILENAME) . '.webp');
        $image = Image::make($resimYolu);
        $image->encode('webp', 80)->save($webpPath);

        // Orijinal PNG dosyasını sil
        $pngPath = public_path('resimler/' . $resimAdi);
        if (file_exists($pngPath)) {
            unlink($pngPath);
        }

        $slider->picture = pathinfo($webpPath, PATHINFO_FILENAME) . '.webp'; // WebP resmin adını veritabanına kaydet
    }


    session()->flash("basarı", "Slider Başarıyla Eklendi");

    $slider->save();

    return redirect()->back();
}

public function slidersil($id){
    $slider = slider::FindOrFail($id);
    $slider -> delete();
    session()->flash("basarı","Slider Silme İşlemi Başarılı");
    return redirect(route("sliderlar"));

}

}
