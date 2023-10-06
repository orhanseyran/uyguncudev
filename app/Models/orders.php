<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    protected $table ="orders";
    protected $fillable = ["user_id"];

    public function products()
    {
        return $this->hasMany(orderdetail::class); //verileri almak istediğin tablo
    }
}
