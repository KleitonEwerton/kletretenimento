<?php

namespace App\Controllers;
use App\Models\User;

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
        return view('site/ListaDeUsuarios');
    }

    //retorna pagina principal
    public function index()
    {
        $users = App\Models\User::all();
        return view('site/ListaDeUsuarios', compact("users"));
    }

    //retorna pagina individual de um elemento
    public function show()
    {
       $id = $_POST['id'];
       $userId = app\Models\User::find($id);

       return view('site/ListaDePosts', compact($userId));
    }

    //retorna a pagina responsavel por criar um elemento
    public function create()
    {
        return view('site/ListaDeUsuarios');
    }

    // valida e armazena os dados preenchidos no front e redireciona para alguma rota caso tudo esteja ok, caso contrario redireciona para a pagina anterior com alguma mensagem de erro
    public function store()
    {
        //Exemplo para o registro de um usuario
        $parameters = [
            'nome' => $_POST['name'],
            'email' => $_POST['email'],
            'senha' => $_POST['password']
        ];

        $userData = filter_input_array(INPUT_POST, $parameters);

        if(in_array(false, $userData)) {
            $errors = array_keys($userData, false, false);
            $_SESSION["errors"] = [];
            foreach($errors as $error) {
                $_SESSION["errors"][$error] = "Digite informações validas, por favor!";
            }
            return view('site/ListaDeUsuarios');
        }

        try {
            $userData["password"] = password_hash($userData["password"], PASSWORD_BCRYPT);
            $user = User::create($userData);
        } catch(QueryException $PDOException) {
            $_SESSION["error"] = ["email" => "Email já foi cadastrado"];
            return view('site/ListaDeUsuarios');
        }
        unset($_SESSION["error"]);
        $_SESSION["logado"] = $user->getAttributes();

        app::get('database')->insertInfo('users', $parameters);

        return redirect('site/ListaDeUsuarios');
    }

    // retorna a pagina para editar um elemento
    public function edit()
    {
        $id = $_GET['id'];
        $user = User::find($id);

        return view('site/ListaDePosts', compact($user));
    }

    // valida e atualiza os dados preenchidos no front e redireciona para alguma rota caso tudo esteja ok, caso contrario redireciona para a pagina anterior com alguma mensagem de erro
    public function update()
    {
        //die(var_dump($_POST));
        $id = $_POST['id'];
        $user = User::find($id);
        $user->update([
            "name" => $_POST['name'],
        ]);

        return redirect('site/ListaDeUsuarios');
    }

    // deleta um elemento e redireciona para alguma rota
    public function delete()
    {
        $id = $_POST['id'];
        $userId = User::destroy($id);

        return redirect('site/ListaDeUsuarios');
    }
    
}