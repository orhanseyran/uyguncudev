<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\orderdetail;
use App\Models\User;
use ShoppingCart;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function myaccount()
    {
        $yeni=ShoppingCart::all();
        $orders = orderdetail::AktifSipariş()->latest()->get();
        $user = User::user()->get();
        return view("my-account",compact("yeni","orders","user"));

    }
    public function updateDetails(Request $request)
{
    $user = auth()->user();

    // Kullanıcı bilgilerini güncelle
    $user->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
    ]);

    // Resim güncelleme
    if ($request->hasFile('resim')) {
        $image = $request->file('resim');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);

        $user->update([
            'resim' =>  $imageName,
        ]);
    }

    // Şifreyi güncelle
    if ($request->filled('current_password') && $request->filled('new_password')) {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|different:current_password|same:confirm_password',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            session()->flash("hata", "Eski Girilen Şifre Hatalı");
            return redirect()->back()->withInput();
        }

        $user->update([
            'password' => bcrypt($request->new_password),
        ]);
    } elseif ($request->input("new_password") !== $request->input("confirm_password")) {
        session()->flash("hata", "Şifreler Hatalı");
        return redirect()->back()->withInput();
    }

    session()->flash("success", "Üyelik bilgileriniz güncellendi");
    return redirect()->back();
}
}
