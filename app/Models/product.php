<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "urunler";
    protected $fillable = ["id","baslik","aciklama","resim","kategori","active","color","order_count"];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function kategori(){

        return $this->belongsTo(Kategori::class);

    }
    public function urunResimler()
    {
        return $this->hasMany(UrunResim::class, 'urun_id'); //alıancak ürünresimleri
    }
    public function portfolyoresimler(){
        return $this->hasMany(Portfolyoresimler::class,"resim_id");
    }

    public function comments (){
        return $this->hasMany(Comments::class,"urun_id");
    }
    public function wishlisturun(){
        return $this->hasMany(wishlist::class,"urun_id");
    }
    public function scopeKatagori($query,$kategori){
        return $query->where("kategori",[$kategori]);
     }
       public function scoperenk($query,$color){
        return $query->where("color",[$color]);
     }
    public function scopeUrunSatici($query){
        return $query->where("active",auth()->user()->id);
    }
    public function scopeAktifÜrün($query){
        return $query->where("active",1);
    }
}
