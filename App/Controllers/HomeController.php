<?php

namespace App\Controllers;

class HomeController {

    public function index(){
        include "App/Views/index.php";
    }

    public function adm(){
        if($_SESSION['login'] == 'login'){
            include "App/Views/ADM/adm.php";
        }
        else{
            include "App/Views/adm.php";
        }

    }
}
