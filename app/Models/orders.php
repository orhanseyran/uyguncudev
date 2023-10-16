<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    protected $table ="orders";
    protected $fillable = ["user_id"];
    public function scopeAktifSipariş($query){
        return $query->where("user_id",auth()->user()->id);
    }

    public function orders(){
        return $this->belongsTo(pay::class);
    }
    public function shopiers(){
        return $this->hasMany(orderdetail::class);
    }
}
