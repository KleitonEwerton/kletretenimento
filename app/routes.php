<?php

use App\Core\Router;


//-----------Rotas do Front-------------//

$router->get('ListaDeUsuarios', 'UserController@view');

$router->get('ListaDeUsuarios/criar', 'UserController@create');

$router->get('ListaDeUsuarios/deletar', 'UserController@delete');

$router->get('ListaDeUsuarios/index', 'UserController@index');

$router->get('ListaDeUsuarios/editar', 'UserController@edit');

$router->get('ListaDeUsuarios/atualizar', 'UserController@update');
