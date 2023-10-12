<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginAndRegisterController extends Controller
{
    public function login()
    {
        return view("admin.login");

    }
    public function loginuser()
    {
        return view("sign-in");

    }
    public function loginpost(Request $request)
    {
        $data  = $request->only("email","password");

        if (Auth::attempt($data)) {
            if (Auth()->user()->role == "Admin") {

                return redirect(route("homeadmin"));

            }
            elseif(Auth()->user()->role == "Alıcı"){

                return redirect(route("myaccount"));

            }
        }
        else
        {
            session()->flash('Hata', 'Email veya şifre yanlış');
            return redirect()->back();
        }

    }
    public function register(){
        return view("admin.usersadd");

    }
    public function registerpost(Request $request){

        $data = $request->only("name","email","password","role");
        $data["password"]=bcrypt($data["password"]);

        $email = $data ["email"];

        $user = User::where("email",$email)->first();
        if ($user) {
            // Kullanıcı zaten kayıtlı ise hata mesajını ayarlayın
            session()->flash('reddet', 'Bu Email Zaten Kayıtlı');
        } else {
            // Kullanıcı kayıtlı değilse yeni kullanıcı kaydını yapın
            User::create($data);
            session()->flash('onay', 'Kullanıcı Başarı İle Eklendi');
        }
        return redirect()->back();



    }

    public function logout(Request $request)
    {
        Auth::logout(); // Kullanıcının oturumunu sonlandır
        session()->flash('giris', 'Çıkış İşlemi Başarılı');
        return redirect('/'); // Kullanıcıyı anasayfaya yönlendir
    }
    public function registerget(){
        return view("sign-up");

    }
    public function registeruser(Request $request)
    {
        $data = $request->only("name","email","password");
        $data["password"]=bcrypt($data["password"]);


        $email = $data ["email"];

        $user = User::where("email",$email)->first();
        if ($user) {
            // Kullanıcı zaten kayıtlı ise hata mesajını ayarlayın
            session()->flash('hata', 'Bu Email Zaten Kayıtlı');
        } else {
            // Kullanıcı kayıtlı değilse yeni kullanıcı kaydını yapın
            User::create($data);
            session()->flash('basarı', 'Kullanıcı Başarı İle Eklendi');
        }
        session()->flash("basarı","Başarıyla Üye Olundu");
        return redirect()->back();

    }
    public function useredit(Request $request,$id)
{
  $getir = user::findorfail($id);
 $password = $getir->password;
 $oldpassword = bcrypt($request->input("old_password"));
 dd($oldpassword);

  if ($password )  {
    $getir->name = $request->name;
    $getir->email = $request->email;
    $password == $request->input("old_password");
    $getir->role = $request->role;
    $getir->save();
    session()->flash("onay","Kullanıcı Başarıyla Güncellendi");
    return redirect()->back();
  }
  else{
    session()->flash("reddet","Kullanıcı Güncellenemedi Girilen Bilgileri Kontrol ediniz");
    return redirect()->back();
  }


}


}
