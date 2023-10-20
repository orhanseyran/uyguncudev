<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolyoresimler extends Model
{
    protected $table ="_portfolyoresimler";
    protected $fillable = ["resim_id","resim_adi"];
    use HasFactory;
}
