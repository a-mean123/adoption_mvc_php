<?php

    
require_once("{$ROOT}{$DS}model{$DS}modelReservation.php");
require_once("{$ROOT}{$DS}model{$DS}modelServices.php");





if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="creat";	
	
switch ($action) {


    case "creat":
        $pagetitle = " reservation";
        $view = "Reservation";
       
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;


    case "readAll":
        $pagetitle = "Liste des reservation";
        $view = "Reservation";
       	$tab_p = ModelReservation::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$u = ModelReservation::select($id);
				if($u!=null){
					$pagetitle = "Details de reservation";
					$view = "detailReservation";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$del = ModelReservation::select($id);
			if($del!=null){
			$del->delete($id);
			header('Location: index.php?controller=admin&action=reservation');
			}
		}
	    break;
		

		
	case "created":

        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
       
       if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
       {
               header("location: index.php?controller=login");
       }else{
        if(isset($_REQUEST['pseudo_proprietaire']) && 
        isset($_REQUEST['email_proprietaire']) && 
        isset($_REQUEST['adresse']) && 
        isset($_REQUEST['num_tel']) && 
        isset($_REQUEST['typeAnimal']) && 
        isset($_REQUEST['nb_chats']) && 
        isset($_REQUEST['nb_chiens']) && 
        isset($_REQUEST['race_chat']) && isset($_REQUEST['race_chien'])
          && isset($_REQUEST['age'])  && isset($_REQUEST['date_arrivee'])  && isset($_REQUEST['date_depart']) ){
			
			
			$imagename=$_FILES['image']['name'];
			$imagepath="assets/images/".$imagename;
			move_uploaded_file($_FILES["image"]["tmp_name"],$imagepath);
			
			
			
			
			$pseudo_proprietaire = $_REQUEST["pseudo_proprietaire"];
			$email_proprietaire = $_REQUEST["email_proprietaire"];
            $image = $imagename;
			$adresse = $_REQUEST["adresse"];
			$num_tel = $_REQUEST["num_tel"];
			$typeAnimal = $_REQUEST["typeAnimal"];
			$nb_chats = $_REQUEST["nb_chats"];
			$nb_chiens = $_REQUEST["nb_chiens"];
			$race_chat = $_REQUEST["race_chat"];
			$race_chien = $_REQUEST["race_chien"];
			$age = $_REQUEST["age"];
			$date_arrivee = $_REQUEST["date_arrivee"];
			$date_depart = $_REQUEST["date_depart"];

            $food = $_REQUEST["food"];
			$walk = $_REQUEST["walk"];
			$both = $_REQUEST["both"];
			$commentaire = $_REQUEST["commentaire"];
			

            
			$id = NULL;


			
				$u = new ModelReservation($pseudo_proprietaire, $email_proprietaire, $image, $adresse, 
                $num_tel, $typeAnimal, $nb_chats, $nb_chiens, $race_chat, $race_chien, $age, $date_arrivee ,$date_depart);	
			
				$tab = array(
				"id" => $id,    
				"pseudo_proprietaire" => $pseudo_proprietaire,
				"email_proprietaire" => $email_proprietaire,
                "adresse" => $adresse,
                "num_tel" => $num_tel,
                "typeAnimal" => $typeAnimal,
                "nb_chats" => $nb_chats,
                "nb_chiens" => $nb_chiens,
                "race_chat" => $race_chat,
                "race_chien" => $race_chien,
                "age" => $age,
                "date_arrivee" => $date_arrivee,
                "date_depart" => $date_depart,
                "image" => $image,



				);				
				$u->insert($tab);
                

                $ad = new ModelServices( 69, $food , $walk   , $both  , $commentaire );
                
                $tAdop = array(
                    "id" => NULL,    
                    "id_reservation" => 69,
                    "food" => $food,
                    "walk" => $walk,
                    "both" => $both,
                    "commentaire" => $commentaire,
                  
                    );
                 $ad->insert($tAdop);   

				header('Location: index.php?controller=admin&action=Reservation');
			
		}
       }


       
		break;
	
	case "update":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$up = ModelReservation::select($id);
			if($up!=null){
				$pagetitle = "Modifier le projet";
				$view = "updateProjet";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
	
        if(isset($_REQUEST['id']) && isset($_REQUEST['titre'])
         && isset($_REQUEST['description']) && isset($_REQUEST['image'])
         && isset($_REQUEST['prix'])){
			$id = $_REQUEST['id'];
			$tab = array(
   			 "id" => $_REQUEST["ncin"],
   			 "titre" => $_REQUEST["titre"],
                "description" => $_REQUEST["description"],
                "image" => $_REQUEST["image"],
   			 "prix" => $_REQUEST["prix"]
   			 );
			$o = ModelReservation::select($id);
			if($o!=null){
				$u = $o->update($tab, $id);		
				$pagetitle = "Projet modifié";
				$view = "updatedProjet";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;




}



 
?>