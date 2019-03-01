<?php
    //Chama o arquivo de autoload
    require_once 'vendor\autoload.php';

    use \App\Controllers\HomeController;
    use \App\Models\Model;

    session_start();
    // Oculta os notice gerado pela não inicializaçáo de variáveis
    error_reporting(0);

    $page = isset($_GET["page"]) ? $_GET["page"] : "index" ;
    $ctrl = new HomeController();

    if(isset($_GET['action'])){
    
        $exe = new Model();

        switch($_GET['action']){
            case "form":
                $exe->Form();
                break;
            case "login":
                $exe->Adm();
                break;
        }

    }

    switch($page){
            case "index":
                $ctrl->index();
                break;
            case "adm":
                $ctrl->adm();
                break;

    }