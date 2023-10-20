<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutus extends Model
{
    protected $table = "aboutus";
    protected $fillable = ["baslik","icerik","meta","meta_aciklama","resim"];
    use HasFactory;
}
