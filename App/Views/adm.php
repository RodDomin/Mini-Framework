<?php

    if($_SESSION['login'] != 'login'){
        include "ADM/index.php";
    }
    else{
        include "ADM/adm.php";
    }
