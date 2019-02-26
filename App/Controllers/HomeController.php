<?php

class Page {

    public function index(){
        include "App/Views/index.php";
    }

    public function adm(){
        if($_SESSION['M'] == 'login'){
            include "App/Views/ADM/adm.php";
        }
        else{
            include "App/Views/adm.php";
        }

    }
}
