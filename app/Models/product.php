<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "urunler";
    protected $fillable = ["baslik","aciklama","resim","kategori","active"];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function kategori(){

        return $this->belongsTo(Kategori::class);

    }
    public function urunResimler(){

        return $this->hasMany(UrunResim::class,"urun_id");
    }

    public function comments(){
        return $this->hasMany(Comments::class,"urun_id");
    }

    public function scopeAktifÜrün($query){
        return $query->where("active",1);
    }
}
