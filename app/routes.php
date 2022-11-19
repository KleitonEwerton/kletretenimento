<?php

use App\Core\Router;


//-----------Rotas do Front-------------//

$router-> get('ListaDeUsuarios', 'UserController@view');

$router-> get('ListaDeUsuarios', 'UserController@create');

$router-> get('ListaDeUsuarios', 'UserController@store');