<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table ="contact";
    protected $fillable = ["ad","telefon","mail","mesaj","okundu"];
    use HasFactory;
    public function scopeOkundu($query){

        return $query->where("okundu",1);

    }
}
