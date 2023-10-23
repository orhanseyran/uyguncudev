<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footer extends Model
{
    use HasFactory;
    protected $table = 'footer';

    protected $fillable = [
        'nedenbizbaslik',
        'nedenbiz1',
        'nedenbiz2',
        'nedenbiz3',
        'nedenbiz4',
        'nedenbiz5',
        'banner1resim',
        'banner2resim',
        'banner1baslik',
        'banner2baslik',
        'aboneolbaslik',
        'aboneolresim',
    ];
}
