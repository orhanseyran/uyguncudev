<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsBlog extends Model
{
    protected $table = "comments_blog";
    protected $fillable = ["ad","email","yorum","blog_id"];

    public function yorumblog(){

        return $this->belongsTo(blog::class);

    }


    use HasFactory;
}
