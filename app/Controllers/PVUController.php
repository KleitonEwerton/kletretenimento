<?php

namespace App\Controllers;
use App\Core\App;

use App\Models\Post;
class PVUController extends Controller
{
    public function view()
    {
        $id = $_GET['id'];
        $post = Post::find($id);

        return view('site/post-visualizacao', ['post'=>$post]);
    }

}