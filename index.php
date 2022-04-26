<?php

$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;

$controleur_default = 'home';


if(!isset($_REQUEST['controller']))
    $controller = $controleur_default;

    else $controller = $_REQUEST['controller'];

    switch($controller){

     

        case 'home':
                require("{$ROOT}{$DS}controller{$DS}controllerHome.php");
                break;
        case 'contact':
                require("{$ROOT}{$DS}controller{$DS}controllerContact.php");
                break;
        case 'adoption':
                require("{$ROOT}{$DS}controller{$DS}controllerAdoption.php");
                break; 
        case 'reservation':
            require("{$ROOT}{$DS}controller{$DS}controllerReservation.php");
            break; 
        case 'about':
                require("{$ROOT}{$DS}controller{$DS}controllerAbout.php");
                break; 

        case 'admin':
            require("{$ROOT}{$DS}controller{$DS}controllerAdmin.php");
            break;   
               
        case 'login':
                require("{$ROOT}{$DS}controller{$DS}controllerLogin.php");
                break; 

        case 'register':
            require("{$ROOT}{$DS}controller{$DS}controllerRegister.php");
            break;   
    }


?>