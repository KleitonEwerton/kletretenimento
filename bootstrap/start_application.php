<?php

namespace bootstrap;

require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$config = [
    "driver" => "mysql",
    "host" => "127.0.0.1",
<<<<<<< HEAD
    "database" => "dados_kl", // coloca o nome do banco aqui
=======
    "database" => "dadoskl", // coloca o nome do banco aqui
>>>>>>> ea04ce14b2253f1239c85fd0825068c114f44062
    "username" => "root",
    "password" => "",

    "charset" => "utf8",
    "collation" => "utf8_general_ci",
];

$capsule->addConnection($config);
$capsule->setAsGlobal();
$capsule->bootEloquent();

