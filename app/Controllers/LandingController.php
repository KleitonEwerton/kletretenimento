<?php

namespace App\Controllers;
use App\Core\App;

use App\Models\Post;

class LandingController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        /*if(!isset($_SESSION['logado'])) {
            return redirect('login');
            exit();
        }*/
    }

    public function view(){
        $posts = App::get('database')->selectAll('posts', 0, 3);
        $tables = [
            'posts' => $posts,
        ];
        
        return view('site/landinPage', $tables);
    }
   

}