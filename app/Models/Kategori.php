<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $fillable = ["katagoriname","katagori_resim"];
    use HasFactory;

    public function urunler(){
        return $this->hasMany(product::class);
    }
}
