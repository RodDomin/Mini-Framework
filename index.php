<?php
    include "App/Controllers/HomeController.php";

    session_start();

    $pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "index" ;
    $ctrl = new Page();

    if($_GET["form"] == "yes"){
        include "App/Models/Model.php";

        $exe = new Main();
        $exe->Form();
    }
    else if($_GET["login"] == "yes"){
        include "App/Models/Model.php";

        $exe = new Main();
        $exe->Adm();

        $_GET["pagina"] = "adm";
    }

    switch($pagina){
            case "index":
                $ctrl->index();
                break;
            case "adm":
                $ctrl->adm();
                break;

    }