<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reply_comment extends Model
{
    protected $table = "replycomment";

    protected $fillable = ["ad","soyad","email","yorum","reply_id"];

    public function yorumyanıt(){
        return $this->belongsTo(blog::class);
    }
    public function scpopeYanıt($query,$yorum){

        return $query->where("reply_id",[$yorum]);

    }

    use HasFactory;
}
