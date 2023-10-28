<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class component extends Model
{
    protected $table = 'componentshome'; // Tablo adını belirtiyoruz

    protected $fillable = [
        'baslik',
        'aciklama1',
        'aciklama2',
        'aciklama3',
        'aciklama4',
        'aciklama5',
        'aciklama6',
        'aciklama7',
        'aciklama8',
        'aciklama9',
        'aciklama10',
        'kategori',
        'resim',
        'link',
    ];
    use HasFactory;
}
