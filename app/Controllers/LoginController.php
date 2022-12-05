<?php

namespace App\Controllers;
use App\Core\App;

class LoginController extends Controller
{
    public function view(){
        return view('site/login');
    }


    public function entrar(){
        

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $senha =  filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        
        
        $redirecionar = App::get('database') -> logar($nome, $senha);

        if(!empty($redirecionar)) {
            
            $_SESSION['id'] = 'ativo';
            return redirect('dashboard');
        }
        
        else 
        {
            echo "<script>alert('Usuario ou senha incorretos!');</script>";
                return view('site/login');
        }
    
    }

   

   

    

}