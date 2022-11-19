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
            $table->timestamps();
        });
    }

    public static function down() {
        Capsule::schema()->drop("users");
    }
}