<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'price',
        'brand',
    ];
        // Questi devono rappresentare i CAMPI nel nostro DataBase
}