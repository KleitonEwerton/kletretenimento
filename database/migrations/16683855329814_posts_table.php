<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class poststable
{
    public static function up()
    {
        Capsule::schema()->create("posts", function (Blueprint $table) {
            $table->increments("id");
            $table->timestamps();
            $table->string("author");
            $table->string("usuario");
            $table->string("tituloDopost");
            $table->string("imagem");
            $table->string("textoPost");
        
        });
    }

    public static function down() {
        Capsule::schema()->drop("posts");
    }
}