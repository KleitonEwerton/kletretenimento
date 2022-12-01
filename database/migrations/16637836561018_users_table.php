<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class userstable
{

    public static function up()
    {
        Capsule::schema()->create("users", function (Blueprint $table) {
            $table->increments("id");
            $table->string("nome");
            $table->string("email")->unique();
            $table->string("senha");
            
        });
    }

    public static function down() {
        Capsule::schema()->drop("users");
    }

}