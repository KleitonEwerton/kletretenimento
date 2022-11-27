<?php

namespace App\Controllers;

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
public function edit(){

$parameters =[
    'usuario' =>$_POST['usuario'],
       'tituloDopost' =>$_POST['tituloDopost'],
       'imagem' =>$_POST['imagem'],
       'textoPost' =>$_POST['textoPost'],
       'created_at'=>$_POST['created_at'],
];
    app::get('database')->edit('posts', $_POST['id'], $parameters);

    return redirect('listaposts');
}

}