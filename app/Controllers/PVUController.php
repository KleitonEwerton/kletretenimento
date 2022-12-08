<?php

namespace App\Controllers;
use App\Core\App;

use App\Models\Post;
class PVUController extends Controller
{
    public function view()
    {
        
        $posts = App::get('database')->selectAll('posts');
        $tables = [
            'posts' => $posts,
        ];
        
        return view('site/post-visualizacao', $tables);
    }

}