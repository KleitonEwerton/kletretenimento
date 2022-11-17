<?php

use App\Core\Router;


//-----------Rotas do Front-------------//

    $router->get('listaposts', 'PostController@index');
    $router->get('', 'HomeController@index');
    
    



