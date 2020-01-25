<?php

/*Ver si hay datos por post*/
if (!isset($_POST["user"]) || !isset($_POST["pass"])){
    header('Location: index.php');
}else{

    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $var_user = 0;
    $var_user_2 = 0;
    $servicio_1 = 0;
    $servicio_2 = 0;
    $servicio_3 = 0;
    $servicio_4 = 0;
    $servicio_5 = 0;

    
    /*Ver que usuario es y si hay nombre que coincida*/
    switch ($user) {
        case "navega_panama":
            $var_user;
            break;
        case "navega_rep_dom":
            $var_user;
            break;
        case "navega_guatemala":
            $var_user;
            break;
        default:
            header('Location: index.php');
    }

     /*Ver que usuario es y si hay nombre que coincida*/
    switch ($pass) {
        case "@navega462pa":
            $var_user_2;
            $servicio_1 = 0;
            $servicio_2 = 1;
            $servicio_3 = 0;
            $servicio_4 = 0;
            $servicio_5 = 0;
            break;
        case "nav@domini471":
            $var_user_2;
            $servicio_1 = 0;
            $servicio_2_b = 1;
            $servicio_3 = 0;
            $servicio_4 = 0;
            $servicio_5 = 0;
            break;
        case "guate@nav376":
            $var_user_2;
            $servicio_1 = 1;
            $servicio_2 = 0;
            $servicio_3 = 0;
            $servicio_4 = 0;
            $servicio_5 = 0;
            break;
        default:
            header('Location: index.php');
    }
}

/*Btn Pago
                    
*/