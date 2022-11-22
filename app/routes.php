<?php

use App\Core\Router;


//-----------Rotas do Front-------------//

$router-> get('ListaDeUsuarios', 'UserController@view');

$router-> get('ListaDeUsuarios', 'UserController@create');

$router-> get('ListaDeUsuarios', 'UserController@store');

$router-> get('ListaDeUsuarios', 'UserController@delete');

$router-> get('ListaDeUsuarios', 'UserController@index');

$router-> get('ListaDeUsuarios', 'UserController@edit');

$router-> get('ListaDeUsuarios', 'UserController@update');
