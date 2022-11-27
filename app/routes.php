<?php

use App\Core\Router;


//-----------Rotas do Front-------------//

    $router->get('listaposts', 'PostController@index');
    $router->post('listaposts/store', 'PostController@create');
    $router->post('listaposts/create', 'PostController@create');
    
    



