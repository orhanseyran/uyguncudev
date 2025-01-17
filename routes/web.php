<?php

use App\Http\Controllers\AdminContoller;
use App\Http\Controllers\AdminControllerPost;
use App\Http\Controllers\ArrayOparationController;
use App\Http\Controllers\BlogFrontEndController;
use App\Http\Controllers\CheakOutController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontAndController;
use App\Http\Controllers\LoginAndRegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SubscribeController;
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


});
Route::get("/logout",[LoginAndRegisterController::class,"logout"])->name("logout");

Route::middleware(["Admin"])->group(function(){
    Route::get("/Kullanıcılar",[AdminContoller::class,"users"])->name("users");
    Route::get("/düzenle/{id}",[AdminContoller::class,"usr"])->name("usr");
    Route::get("/Kullanıcı-sil/{id}",[AdminContoller::class,"usersdelete"])->name("usersdelete");
    Route::get("/register",[LoginAndRegisterController::class,"register"])->name("register");
    Route::post("/register",[LoginAndRegisterController::class,"registerpost"])->name("registerpost");
    Route::post("/useredit/{id}",[LoginAndRegisterController::class,"useredit"])->name("useredit");
    Route::get("/Kullanıcı-düzenle/{id}",[LoginAndRegisterController::class,"store"])->name("store");
    Route::get("/panelim",[AdminContoller::class,"homeadmin"])->name("homeadmin");
    Route::get("/ürünler",[AdminContoller::class,"products"])->name("products");
    Route::post("/ürün-ekle",[AdminControllerPost::class,"productpost"])->name("productpost");
    Route::get("/ürün-ekle",[AdminContoller::class,"productadd"])->name("productadd");
    Route::get("/ürün-düzenle/{id}",[AdminContoller::class,"productedit"])->name("productedit");
    Route::post("/ürün-düzenle/{id}",[AdminControllerPost::class,"productedit"])->name("producteditpost");
    Route::get("/ürün-sil/{id}",[AdminControllerPost::class,"delete"])->name("delete");
    //ürün renk ekle düzenleme başlangıc
    Route::post("/Ürün-renk-ekle",[AdminControllerPost::class,"coloraddpost"])->name("coloraddpost");
    Route::post("/Ürün-renk-düzenle/{id}",[AdminControllerPost::class,"coloreditpost"])->name("coloreditpost");
    //ürün renk ekle düzenleme bitiş
    //ürün boyut ekle düzenleme başlangıc
    Route::post("ürün-boyut-ekle",[AdminControllerPost::class,"sizeaddpost"])->name("sizeaddpost");
    Route::post("ürün-boyut-düzenle/{id}",[AdminControllerPost::class,"sizeeditpost"])->name("sizeeditpost");
    //ürün boyut ekle düzenleme bitiş
    Route::get("ürün-boyutları",[AdminContoller::class,"ürünboyut"])->name("ürünboyut");
    Route::get("ürün-boyutu-ekle",[AdminContoller::class,"ürünboyutadd"])->name("ürünboyutadd");
    Route::get("ürün-boyutu-düzenle/{id}",[AdminContoller::class,"ürünboyutedit"])->name("ürünboyutedit");
    Route::get("ürün-boyut-sil/{id}",[AdminControllerPost::class,"sizedeletepost"])->name("sizedeletepost");
    Route::get("ürün-renkleri",[AdminContoller::class,"ürünrenk"])->name("ürünrenk");
    Route::get("ürün-renkleri-ekle",[AdminContoller::class,"ürünrenkadd"])->name("ürünrenkadd");
    Route::get("ürün-renkleri-düzenle/{id}",[AdminContoller::class,"ürünrenkedit"])->name("ürünrenkedit");
    Route::get("ürün-renk-sil/{id}",[AdminControllerPost::class,"colordeletepost"])->name("colordeletepost");
    Route::get("/kategoriler",[AdminContoller::class,"kategorigetir"])->name("kategori");
    Route::get("/katagori-ekle",[AdminContoller::class,"kategoriekleme"])->name("katagoriekle");
    Route::post("/kategori-ekle",[AdminControllerPost::class,"kategoriekle"])->name("kategoriekle");
    Route::post("/kategori-sil/{id}",[AdminControllerPost::class,"katagorisil"])->name("katagorisil");
    Route::post("/kategori-düzenle/{id}",[AdminContoller::class,"katagoridüzenle"])->name("katagoridüzenle");
    Route::get("/sliderlar",[SliderController::class,"slider"])->name("sliderlar");
    Route::get("/slider-ekle",[SliderController::class,"sliderekle"])->name("sliderekle");
    Route::get("/slider-düzenle/{id}",[SliderController::class,"sliderdüzenle"])->name("sliderdüzenle");
    Route::get("/slider-sil/{id}",[SliderController::class,"slidersil"])->name("slidersil");
    Route::post("/slider-düzenle/{id}",[SliderController::class,"sliderdüzen"])->name("sliderdüzen");
    Route::post("/slider-ekle",[SliderController::class,"sliderpost"])->name("sliderpost");
    Route::post("/Kullanıcı-Güncelle/{id}",[LoginAndRegisterController::class,"updateDetailsadmin"])->name("updateDetailsadmin");
    Route::get("/bloglar",[AdminContoller::class,"blogs"])->name("blogs");
    Route::get("/blog-ekle",[AdminContoller::class,"blogekle"])->name("blogekle");
    Route::get("/blog-düzenle/{id}",[AdminContoller::class,"blogedit"])->name("blogedit");
    Route::get("/blog-sil/{id}",[AdminContoller::class,"blogsil"])->name("blogesil");
    Route::get("/siparişler",[AdminContoller::class,"orders"])->name("orders");
    Route::get("/sipariş-detay/{id}",[AdminContoller::class,"ordersid"])->name("ordersid");
    Route::post("/sipariş-detay-post{id}",[AdminControllerPost::class,"ordersidpost"])->name("ordersidpost");
    Route::post("/blog-ekle",[AdminControllerPost::class,"blogaddpost"])->name("blogaddpost");
    Route::post("/blog-düzenle/{id}",[AdminControllerPost::class,"blogaddedit"])->name("blogaddedit");
    Route::get("/seo-ayarları",[SeoController::class,"seo"])->name("seo");
    Route::get("/seo-ekle",[SeoController::class,"seoaddpage"])->name("seoaddpage");
    Route::post("/seo-ekle-post",[SeoController::class,"seoadd"])->name("seoadd");
    Route::post("/seo-ekle-update/{id}",[SeoController::class,"seoupdate"])->name("seoupdate");
    Route::get("/seo-güncelle/{id}",[SeoController::class,"seoedit"])->name("seoedit");
    Route::get("/seo-sil/{id}",[SeoController::class,"seodelete"])->name("seodelete");
    Route::get("/bizkimiz",[AdminContoller::class,"bizkimiz"])->name("bizkimiz");
    Route::post("/bizkimizpost",[AdminControllerPost::class,"bizkimizpost"])->name("bizkimizpost");
    Route::get("/Hizmetler",[AdminContoller::class,"hizmetlerimiz"])->name("hizmetlerliste");
    Route::get("/Hizmet-Ekle",[AdminContoller::class,"hizmetadd"])->name("hizmetadd");
    Route::get("/Hizmet-Düzenle/{id}",[AdminContoller::class,"hizmetedit"])->name("hizmetedit");
    Route::get("/Hizmet-Sil/{id}",[AdminContoller::class,"hizmetdel"])->name("hizmetdel");
    Route::post("/servicespost",[AdminControllerPost::class,"servicespost"])->name("servicespost");
    Route::post("/servicesedit/{id}",[AdminControllerPost::class,"servicesedit"])->name("servicesedit");
    Route::get("/Portfolyo",[AdminContoller::class,"portfolyo"])->name("portfolyoliste");
    Route::get("/Portfolyo-Ekle",[AdminContoller::class,"portfolyoadd"])->name("portfolyoadd");
    Route::get("/Portfolyo-Düzenle/{id}",[AdminContoller::class,"portfolyoedit"])->name("portfolyoedit");
    Route::post("/portfolyopost",[AdminControllerPost::class,"portfolyopost"])->name("portfolyopost");
    Route::post("/portfolyoedit/{id}",[AdminControllerPost::class,"portfolyosedit"])->name("portfolyoedit");
    Route::get("/Menu",[AdminContoller::class,"header"])->name("header");
    Route::get("/Menu-Ekle",[AdminContoller::class,"headeradd"])->name("headeradd");
    Route::get("/headereditget/{id}",[AdminContoller::class,"headereditget"])->name("headereditget");
    Route::get("/header-del/{id}",[AdminContoller::class,"headerdel"])->name("headerdel");
    Route::post("/Menu-Ekle-post",[AdminControllerPost::class,"headerpost"])->name("headerpost");
    Route::post("/Menuedit/{id}",[AdminControllerPost::class,"headeredit"])->name("headeredit");
    Route::get("/Gelen-Mailler",[AdminContoller::class,"contact"])->name("contactadmin");
    Route::get("/Mail-Oku/{id}",[AdminContoller::class,"contactid"])->name("contactid");
    Route::get("/Mail-Sil/{id}",[AdminContoller::class,"contactdel"])->name("contactdel");
    Route::get("/Galeri",[AdminContoller::class,"galery"])->name("galery");
    Route::get("/İndirim-Kuponları",[AdminContoller::class,"kupon"])->name("kupon");
    Route::get("/İndirim-Kuponu-Ekle",[AdminContoller::class,"kuponekle"])->name("kuponekle");
    Route::get("/İndirim-Kuponu-Düzenle/{id}",[AdminContoller::class,"kuponid"])->name("kuponid");
    Route::get("/İndirim-Kuponu-Sil/{id}",[AdminContoller::class,"kupondel"])->name("kupondel");
    Route::post("/İndirim-Kuponu-Ekle-post",[AdminControllerPost::class,"kuponaddpost"])->name("kuponaddpost");
    Route::post("/İndirim-Kuponu-Düzenle-poat/{id}",[AdminControllerPost::class,"kuponaddedits"])->name("kuponaddedits");

    Route::get("/Anasayfa-Düzeni",[AdminContoller::class,"componenthome"])->name("componenthome");
    Route::get("/Anasayfa-ekle",[AdminContoller::class,"componestadd"])->name("componestadd");
    Route::get("/Anasayfa-düzenle/{id}",[AdminContoller::class,"componenthomeedit"])->name("componenthomeedit");
    Route::get("/Anasayfa-Sil/{id}",[AdminContoller::class,"componentdelete"])->name("componentdelete");
    Route::post("/Ana-Sayfa-Ekle",[AdminControllerPost::class,"componenthomepost"])->name("componenthomepost");
    Route::post("/Ana-Sayfa-Düzenle/{id}",[AdminControllerPost::class,"componenthomeditpost"])->name("componenthomeditpost");
});
Route::middleware(["Satici"])->group(function(){
    Route::get("/Satici-Kullanıcılar",[AdminContoller::class,"users"])->name("saticiusers");
    Route::get("/Satici-düzenle/{id}",[AdminContoller::class,"usr"])->name("saticiusr");
    Route::get("/Satici-Kullanıcı-sil/{id}",[AdminContoller::class,"usersdelete"])->name("saticiusersdelete");
    Route::get("/Satici-register",[LoginAndRegisterController::class,"register"])->name("saticiregister");
    Route::post("/Satici-register",[LoginAndRegisterController::class,"registerpost"])->name("saticiregisterpost");
    Route::post("/Satici-useredit/{id}",[LoginAndRegisterController::class,"useredit"])->name("saticiuseredit");
    Route::get("/Satici-Kullanıcı-düzenle/{id}",[LoginAndRegisterController::class,"store"])->name("saticistore");
    Route::get("/Satici-panelim",[AdminContoller::class,"homeadmin"])->name("saticihomeadmin");
    Route::get("/Satici-ürünler",[AdminContoller::class,"products"])->name("saticiproducts");
    Route::post("/Satici-ürün-ekle",[AdminControllerPost::class,"productpost"])->name("saticiproductpost");
    Route::get("/Satici-ürün-ekle",[AdminContoller::class,"productadd"])->name("saticiproductadd");
    Route::get("/Satici-ürün-düzenle/{id}",[AdminContoller::class,"productedit"])->name("saticiproductedit");
    Route::post("/Satici-ürün-düzenle/{id}",[AdminControllerPost::class,"productedit"])->name("saticiproducteditpost");
    Route::get("/Satici-ürün-sil/{id}",[AdminControllerPost::class,"delete"])->name("saticidelete");
    // Route::post("/Satici-Ürün-renk-ekle",[AdminControllerPost::class,"coloraddpost"])->name("saticicoloraddpost");
    // Route::post("/Satici-Ürün-renk-düzenle/{id}",[AdminControllerPost::class,"coloreditpost"])->name("saticicoloreditpost");
    // Route::post("Satici-ürün-boyut-ekle",[AdminControllerPost::class,"sizeaddpost"])->name("saticisizeaddpost");
    // Route::post("Satici-ürün-boyut-düzenle/{id}",[AdminControllerPost::class,"sizeeditpost"])->name("saticisizeeditpost");
    Route::get("/logout-alici",[LoginAndRegisterController::class,"logoutalici"])->name("logoutalici");

    Route::get("/siparişleri",[AdminContoller::class,"orders"])->name("saticiorders");
    Route::get("/siparişim-detay/{id}",[AdminContoller::class,"ordersid"])->name("saticiordersid");
    Route::post("/siparişim-detay-post{id}",[AdminControllerPost::class,"ordersidpost"])->name("saticiordersidpost");






});


Route::middleware(["Alici"])->group(function(){
    Route::get("/hesabim",[UserController::class,"myaccount"])->name("myaccount");
    Route::get("/logout-alici",[LoginAndRegisterController::class,"logoutalici"])->name("logoutalici");
});

//FrontEndGetMetodlar//
Route::get("/blog",[BlogFrontEndController::class,"blog"])->name("blog");
Route::get("/bloglar/{id}",[BlogFrontEndController::class,"blogdetail"])->name("blogdetail");
Route::get("/urun/{id}",[FrontAndController::class,"product"])->name("productid");
Route::get("/hesabım",[FrontAndController::class,"hesabım"])->name("hesabım");
Route::get("/sepetim",[ShoppingCartController::class,"cart"])->name("cart");
Route::get("/Sepete-Ekle/{id}",[ShoppingCartController::class,"addtocart"])->name("addtocart");
Route::get("/Sepete-Ekle-normal/{id}",[ShoppingCartController::class,"addtocartnormal"])->name("addtocartnormal");
Route::get("/ödemesayfası/{id}",[ShoppingCartController::class,"checkout"])->name("checkout");
Route::get("/sepet-update/{rawId}/{type}",[ShoppingCartController::class,"updatecart"])->name("updatecart");
Route::get("/sil/{rawId}",[ShoppingCartController::class,"removecart"])->name("removecart");
Route::get("/Sepeti-Boşalt",[ShoppingCartController::class,"destroycart"])->name("destroycart");
Route::get("/ödeme",[CheakOutController::class,"checkout"])->name("checkout");
Route::post("/ödeme-post",[CheakOutController::class,"store"])->name("store");
Route::post("/shopieronay",[CheakOutController::class,"shopierödeme"])->name("shopierödeme");

Route::get("array/{name}",[ArrayOparationController::class,"show"]);
Route::get("/gelen",[CheakOutController::class,"orderdetail"]);

Route::get("/search",[FrontAndController::class,"search"])->name("search");
Route::get("/mağaza",[FrontAndController::class,"shop"])->name("shop");
Route::get("/search",[FrontAndController::class,"search"])->name("search");
Route::post("/yorum-yap/{id}",[CommentsController::class,"commentadd"])->name("commentadd");
Route::post("/yorum-yap-blog/{id}",[CommentsController::class,"commentblogadd"])->name("commentblogadd");

Route::post("/beğendiklerim/{id}",[FrontAndController::class,"wishlistadd"])->name("wishlistadd");
Route::get("/İstek-Listem",[FrontAndController::class,"wishlist"])->name("wishlist");
Route::get("/wishlist-sil/{id}",[FrontAndController::class,"wishlistdelete"])->name("wishlistdelete");
Route::get("/Biz-Kimiz",[FrontAndController::class,"about"])->name("about");

Route::post("/Kullanıcı-güncelle",[UserController::class,"updateDetails"])->name("updateDetails");

Route::post("Abone-Ol",[SubscribeController::class,"subscribe"])->name("subscribe");
Route::get("/iletişim",[ContactController::class,"contact"])->name("contact");
Route::post("/iletişim-post",[ContactController::class,"contactpost"])->name("contactpost");
Route::get("/cupon-indirim",[ShoppingCartController::class,"cupon"])->name("cupon");

