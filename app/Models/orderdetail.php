<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderdetail extends Model
{
    protected $table = "orders_detail";
    protected $fillable = ["name","surname","adress","phone","urun_adı","email","ordernote","user_id","city","total_price","payment_method","orders_id"];
    use HasFactory;
    public function user(){
        return $this->belongsTo(user::class);
    }

    public function order()
    {
        return $this->belongsTo(orders::class); //verileri göndermek istedin tablo
    }

}
