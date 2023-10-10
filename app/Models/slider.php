<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = "slider";
    protected $fillable = ["baslik","icerik","picture","buton","butonlink"];
    use HasFactory;
}

