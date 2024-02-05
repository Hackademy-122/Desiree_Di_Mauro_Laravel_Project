<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'price',
        'brand',
        'img',
        'user_id',
    ];
        // Questi devono rappresentare i CAMPI nel nostro DataBase


        // l oggetto di tipo article è strettamente collegato ad un solo oggetto di tipo user
        public function user(): BelongsTo
        {

            // la funzione quando chiamata sull oggetto article restituira l unico utente ad esso collegato
            return $this->belongsTo(User::class);
        }

// STO DICENDO CHE TUTTI GLI OGGETTI ARTICLE SARANNO COLLEGATI A PIU OGGETTI CATEGORY

        public function categories(): BelongsToMany
        {
            // DALL OGGETTO CHE HAI CREATO RECUPERAMI TUTTE LE CATEGORIE STRETTAMENTE COLLEGATE ALLA SINGOLA CATEGORIA
            return $this->belongsToMany(Category::class);
        }
}
