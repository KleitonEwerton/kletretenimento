<?php

namespace App\Controllers;

use App\Core\App;

class LoginController extends Controller
{
    public function view()
    {
        return view('site/login');
    }


    public function entrar()
    {


        $name = filter_input(INPUT_POST, 'name');
        $password =  filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);


        $redirecionar = App::get('database')->logar($name, $password);

        if (!empty($redirecionar)) {

            $_SESSION['id'] = 'ativo';
            return redirect('dashboard');
        } else {
            return view('site/login');
        }
    }
}
