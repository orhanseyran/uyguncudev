<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = "comments";
    protected $fillable = ["urun_id","urun","ad","soyad","email","puan","yorum","active"];
    use HasFactory;

    public function yorum(){
        return $this->belongsTo(product::class);
    }

    public function scopeAktifYorum($query){
        return $query->where("active",1);
    }
}
