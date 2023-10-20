<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seo extends Model
{
    protected $table = "seo";
    protected $fillable = ["BladeAdı","sayfa","anahtar_kelime","meta_açıklama"];
    use HasFactory;
}
