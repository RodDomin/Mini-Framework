<?php

    if($_SESSION['M'] != 'login'){
        include "ADM/index.php";
    }
    else{
        include "ADM/adm.php";
    }
