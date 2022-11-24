<?php

use App\Core\Router;


//-----------Rotas do Front-------------//

$router->get('ListaDeUsuarios', 'UserController@view');

$router->get('ListaDeUsuarios/criar', 'UserController@create');

$router->get('ListaDeUsuarios/deletar', 'UserController@delete');

$router->get('ListaDeUsuarios/index', 'UserController@index');

$router->get('ListaDeUsuarios/editar', 'UserController@edit');

$router->get('ListaDeUsuarios/atualizar', 'UserController@update');

$router->get('landinPage', 'LandingController@view');

$router->get('listaPost', 'ListapController@view');

$router->get('login', 'LoginController@view');

$router->get('post-visualizacao', 'PVUController@view');