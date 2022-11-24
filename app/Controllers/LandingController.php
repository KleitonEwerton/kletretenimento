<?php

namespace App\Controllers;

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
        return view('site/landinPage');
    }


    public function viewPVU(){
        return view('site/post-visualizacao');
    }
   
}