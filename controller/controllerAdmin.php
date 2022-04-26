<?php

    

$pagetitle = 'Admin';
$view = 'admin';
$controller = 'admin';
  

require("{$ROOT}{$DS}view{$DS}admin.php");
require_once("./model/modelContact.php");
require_once("./model/modelReservation.php");






if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="contact";	
	
switch ($action) {
    case "reservation":
        $pagetitle = "Admin panel";
        $view = "getAllReservation";
       
        $tab_p = modelReservation::getAll();
        require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
        break;


    case "contact":
        $pagetitle = "Admin panel";
        $view = "getAllContact";
        $tab_c = modelContact::getAll();
       //	$tab_c = modelContact::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}admin.php");//"redirige" vers la vue
        break;

      
            

       



                 

                   



        case "readblog":	
            if(isset($_REQUEST['id'])){
                $id = $_REQUEST['id'];
                $u = ModelBlog::select($id);
                    if($u!=null){
                        $pagetitle = "Details de blog";
                        $view = "updateBlog";
                        require ("{$ROOT}{$DS}admin.php");
                    }
                }	
            break;
}



 
?>
