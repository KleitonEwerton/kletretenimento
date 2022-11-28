<?php

namespace App\Controllers;

use App\Models\Post;

use App\Core\App;

class ListapostsController extends Controller
{
    public function view(){
       
       $posts = App::get('database')->selectAll('posts');
       $tables = [
        'posts' => $posts,
       ];
        return view('site/listaposts', $tables);
    }
public function create(){
    $parameters = [
       'usuario' =>$_POST['usuario'],
       'tituloDopost' =>$_POST['tituloDopost'],
       'imagem' =>$_POST['imagem'],
       'textoPost' =>$_POST['textoPost'],
       'created_at'=>$_POST['created_at'],
    ];
   app::get('database')->insert('posts', $parameters);

 return redirect('listaposts');
}

public function delete(){

    $id = $_POST['id'];

    app::get('database')->delete('posts', $id);

    return redirect('listaposts');

 }
// retorna a pagina para editar um elemento
public function edit()
{
    $id = $_GET['id'];
    $post = Post::find($id);

    return view('listaposts', compact($post));
}

 public function update(){
      $id = $_POST['id'];
      //die(var_dump($_POST));
      $post = Post::find($id);
      $post->update([
       'usuario' =>$_POST['usuario'],
       'tituloDopost' =>$_POST['tituloDopost'],
       'imagem' =>$_POST['imagem'],
       'textoPost' =>$_POST['textoPost'],
       'created_at'=>$_POST['created_at'],
]);

    return redirect('listaposts');
}

}