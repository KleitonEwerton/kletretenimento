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

// listaposts rotas inicio

$router->get('listaposts', 'ListapostsController@view');

$router->post('listaposts/criar', 'ListapostsController@create');

$router->post('listaposts/deletar', 'ListapostsController@delete');

$router->post('listaposts/update', 'ListapostsController@update');

// listaposts rotas fim

$router->get('login', 'LoginController@view');

$router->get('post-visualizacao', 'PVUController@view');

$router->get('index-dashbord', 'DashController@view');
