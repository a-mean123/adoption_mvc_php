<?php

    

$pagetitle = 'Home';
$view = 'home';
$controller = 'home';
  



    
require_once("{$ROOT}{$DS}model{$DS}modelReservation.php");




if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
       
     
        
           $tab_new = modelReservation::getLatest();   
           require("{$ROOT}{$DS}view{$DS}view.php");

        break;
    
    }

?>