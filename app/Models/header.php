<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class header extends Model
{
    protected $table = "header";
    protected $fillable = ["logoimg","menu1","menu2","menu3","menu4","menu5"];
    use HasFactory;
}
