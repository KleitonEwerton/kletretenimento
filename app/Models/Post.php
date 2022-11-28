<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post Extends Model
{

    protected $fillable = [
        'body',
        'user_id',
        'image_path',
        'usuario',
        'tituloDopost',
        'imagem',
        'textoPost',
        'created_at',
         'id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}