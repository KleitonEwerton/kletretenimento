<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User Extends Model
{

    protected $fillable = [
        "id",
        "name", 
        "email",
        "phone",
        "password",
        "sexo",
        "data_nascimento",
    ];

}