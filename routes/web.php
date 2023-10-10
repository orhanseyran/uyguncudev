<?php

use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\AdminControllerPost;
use App\Http\Controllers\ArrayOparationController;
use App\Http\Controllers\CheakOutController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\FrontAndController;
use App\Http\Controllers\LoginAndRegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[FrontAndController::class,"home"])->name("home");

Route::middleware(["Guest"])->group(function(){

    Route::get("/KullaniciGiris",[FrontAndController::class,"loginform"])->name("loginkullanıcı");
    Route::get("/login",[LoginAndRegisterController::class,"login"])->name("login");
    Route::get("/login-user",[LoginAndRegisterController::class,"loginuser"])->name("loginuser");
    Route::post("/login",[LoginAndRegisterController::class,"loginpost"])->name("loginpost");
    Route::get("/register-user",[LoginAndRegisterController::class,"registerget"])->name("registerget");
    Route::post("/register",[LoginAndRegisterController::class,"registerpost"])->name("registerpost");
    Route::post("/register-user",[LoginAndRegisterController::class,"registeruser"])->name("registeruser");
    Route::get("/logout",[LoginAndRegisterController::class,"logout"])->name("logout");

});


Route::middleware(["Admin"])->group(function(){
    Route::get("/register",[LoginAndRegisterController::class,"register"])->name("register");


    Route::get("/panelim",[AdminContoller::class,"homeadmin"])->name("homeadmin");
    Route::get("/logout",[LoginAndRegisterController::class,"logout"])->name("logout");
    Route::get("/ürünler",[AdminContoller::class,"products"])->name("products");
    Route::post("/ürün-ekle",[AdminControllerPost::class,"productpost"])->name("productpost");
    Route::get("/ürün-ekle",[AdminContoller::class,"productadd"])->name("productadd");
    Route::get("/ürün-düzenle/{id}",[AdminContoller::class,"productedit"])->name("productedit");
    Route::post("/ürün-düzenle/{id}",[AdminControllerPost::class,"productedit"])->name("producteditpost");
    Route::get("/ürün-sil/{id}",[AdminControllerPost::class,"delete"])->name("delete");
    Route::get("/kategoriler",[AdminContoller::class,"kategorigetir"])->name("kategori");
    Route::get("/katagori-ekle",[AdminContoller::class,"kategoriekleme"])->name("katagoriekle");
    Route::post("/kategori-ekle",[AdminControllerPost::class,"kategoriekle"])->name("kategoriekle");
    Route::get("/sliderlar",[SliderController::class,"slider"])->name("sliderlar");
    Route::get("/slider-ekle",[SliderController::class,"sliderekle"])->name("sliderekle");
    Route::get("/slider-düzenle/{id}",[SliderController::class,"sliderdüzenle"])->name("sliderdüzenle");
    Route::get("/slider-sil/{id}",[SliderController::class,"slidersil"])->name("slidersil");
    Route::post("/slider-düzenle/{id}",[SliderController::class,"sliderdüzen"])->name("sliderdüzen");
    Route::post("/slider-ekle",[SliderController::class,"sliderpost"])->name("sliderpost");
});

Route::middleware(["Alici"])->group(function(){
    Route::get("/hesabim",[UserController::class,"myaccount"])->name("myaccount");
});

//FrontEndGetMetodlar//
Route::get("/urun/{id}",[FrontAndController::class,"product"])->name("productid");
Route::get("/hesabım",[FrontAndController::class,"hesabım"])->name("hesabım");
Route::get("/sepetim",[ShoppingCartController::class,"cart"])->name("cart");
Route::get("/Sepete-Ekle/{id}",[ShoppingCartController::class,"addtocart"])->name("addtocart");
Route::get("/ödemesayfası/{id}",[ShoppingCartController::class,"checkout"])->name("checkout");
Route::get("/sepet-update/{rawId}/{type}",[ShoppingCartController::class,"updatecart"])->name("updatecart");
Route::get("/sil/{rawId}",[ShoppingCartController::class,"removecart"])->name("removecart");
Route::get("/ödeme",[CheakOutController::class,"checkout"])->name("checkout");
Route::post("/ödeme-post",[CheakOutController::class,"store"])->name("store");
Route::post("/shopieronay",[CheakOutController::class,"shopierödeme"])->name("shopierödeme");

Route::get("array/{name}",[ArrayOparationController::class,"show"]);
Route::get("/gelen",[CheakOutController::class,"orderdetail"]);

Route::get("/search",[FrontAndController::class,"search"])->name("search");
Route::get("/shop",[FrontAndController::class,"shop"])->name("shop");
Route::get("/search",[FrontAndController::class,"search"])->name("search");
Route::post("/yorum-yap/{id}",[CommentsController::class,"commentadd"])->name("commentadd");

Route::post("/beğendiklerim/{id}",[FrontAndController::class,"wishlistadd"])->name("wishlistadd");
Route::get("/İstek-Listem",[FrontAndController::class,"wishlist"])->name("wishlist");
Route::get("/wishlist-sil/{id}",[FrontAndController::class,"wishlistdelete"])->name("wishlistdelete");


