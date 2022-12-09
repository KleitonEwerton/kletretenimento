<?php

use App\Core\Router;


//-----------Rotas do Front-------------//

$router->get('ListaDeUsuarios', 'UserController@view');

$router->post('ListaDeUsuarios/criar', 'UserController@create');

$router->post('ListaDeUsuarios/deletar', 'UserController@delete');

$router->post('ListaDeUsuarios/editar', 'UserController@edit');

$router->post('ListaDeUsuarios/atualizar', 'UserController@update');

$router->get('landing-page', 'LandingController@view');

$router->get('listaPost', 'ListapController@view');

// listaposts rotas inicio

$router->get('listaposts', 'ListapostsController@view');

$router->post('listaposts/criar', 'ListapostsController@create');

$router->post('listaposts/deletar', 'ListapostsController@delete');

$router->post('listaposts/update', 'ListapostsController@update');

// listaposts rotas fim

$router->get('login', 'LoginController@view');

$router->post('login/logar', 'LoginController@entrar');

$router->get('post-visualizacao', 'PVUController@view');

$router->get('dashboard', 'DashController@view');

$router->get('', 'LandingController@view');