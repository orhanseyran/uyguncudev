<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    protected $table = "wishlist";
    protected $fillable = ["urun_id","user_name","wish_resim","product_name","price"];

    public function wishlist(){
        return $this->belongsTo(product::class);
    }
    public function wishlistuser(){
        return $this->belongsTo(User::class);
    }
    public function scopelist($query){

        return $query->where("user_name",auth()->user()->name);
    }
    use HasFactory;
}
