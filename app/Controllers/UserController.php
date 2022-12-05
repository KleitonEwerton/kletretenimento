<?php

namespace App\Controllers;
use App\Models\User;
use App\Core\App;

class UserController extends Controller
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
        $users = User::all();
        return view('/site/ListaDeUsuarios', compact('users'));
    }

    // valida e armazena os dados preenchidos no front e redireciona para alguma rota caso tudo esteja ok, caso contrario redireciona para a pagina anterior com alguma mensagem de erro
    public function create()
    {
        //Exemplo para o registro de um usuario
        $parameters = [
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'phone'=>$_POST['phone'],
            'password'=>$_POST['password'],
        ];

        App::get('database')->insert('users', $parameters);

        return redirect('ListaDeUsuarios');
    }

    // retorna a pagina para editar um elemento
    public function edit()
    {
        $id = $_GET['id'];
        $user = User::find($id);

        return view('/site/ListaDePosts', compact($user));
    }

    // valida e atualiza os dados preenchidos no front e redireciona para alguma rota caso tudo esteja ok, caso contrario redireciona para a pagina anterior com alguma mensagem de erro
    public function update()
    {
        
        $id = $_POST['id'];
        die(var_dump($id));
        $user = User::find($id);
        $user->update([
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'phone'=>$_POST['phone'],
            'password'=>$_POST['password']
        ]);

        return redirect('ListaDeUsuarios');
    }

    // deleta um elemento e redireciona para alguma rota
    public function delete()
    {
        $id = $_POST['id'];
        $userId = User::destroy($id);

        return redirect('ListaDeUsuarios');
    }
    
}