<?php

    
$controller = 'adoption';
      
 //   require("{$ROOT}{$DS}view{$DS}view.php");


 require_once ("{$ROOT}{$DS}model{$DS}modelAdoption.php"); // chargement du modèle

 if(isset($_REQUEST['action']))	
 /* recupère l'action passée dans l'URL*/
     $action = $_REQUEST['action'];
 /* NB: On a ajouté un comportement par défaut avec action=readAll.*/
     else $action="creat";	
     
 switch ($action) {
     case "creat":
         $pagetitle = "Adoption";
         $view = "adoption";
         $tab_p = ModelAdoption::getAll();
         require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
         break;
 
     case "read":	
         if(isset($_REQUEST['ncin'])){
             $ncin = $_REQUEST['ncin'];
             $u = Modeladoption::select($ncin);
                 if($u!=null){
                     $pagetitle = "Details de l'utilisateur";
                     $view = "read";
                     require ("{$ROOT}{$DS}view{$DS}view.php");
                 }
             }	
         break;
         
     case "delete":
         if(isset($_REQUEST['id'])){
             $id = $_REQUEST['id'];
             $del = Modeladoption::select($id);
             if($del!=null){
             $del->delete($id);
             header('Location: index.php?controller=admin&action=adoption');
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
        if(
            isset($_REQUEST['typeAnimal']) && 
            isset($_REQUEST['sexe']) && 
            isset($_REQUEST['nom']) && 
            isset($_REQUEST['race'])
              && isset($_REQUEST['age']) 
              
              ){
                
                
                $imagename=$_FILES['image']['name'];
                $imagepath="assets/images/".$imagename;
                move_uploaded_file($_FILES["image"]["tmp_name"],$imagepath);
                
                
                
                
            
                $image = $imagename;
            
            
                $typeAnimal = $_REQUEST["typeAnimal"];
                $race = $_REQUEST["race"];
                $nom = $_REQUEST["nom"];
        
                $age = $_REQUEST["age"];
                $sexe = $_REQUEST["sexe"];
            
    
              
    
                
                $id = NULL;
    
    
                
                    $u = new ModelAdoption( $typeAnimal, $race, $nom, $age, $sexe , $image);	
                
                    $tab = array(
                    "id" => $id,    
                    
                    "typeAnimal" => $typeAnimal,
                    "race" => $race,
                    "nom" => $nom,
                  
                    "age" => $age,
                    "sexe" => $sexe,
                 
                    "image" => $image,
    
    
    
                    );				
                    $u->insert($tab);
                    
    
                 
    
                    header('Location: index.php?controller=adoption');
                
            }
       }
		break;
     
     case "update":
         if(isset($_REQUEST['ncin'])){
             $ncin = $_REQUEST['ncin'];
             $up = Modeladoption::select($ncin);
             if($up!=null){
                 $pagetitle = "Modifier l'utilisateur";
                 $view = "update";
                 require ("{$ROOT}{$DS}view{$DS}view.php");			
             }
             
         }
         break;
         
     case "updated":
         if(isset($_REQUEST['ncin']) && isset($_REQUEST['n']) && isset($_REQUEST['p'])){
             $oldncin = $_REQUEST['ncin'];
             $tab = array(
                 "ncin" => $_REQUEST["ncin"],
                 "nom" => $_REQUEST["n"],
                 "prenom" => $_REQUEST["p"]
                 );
             $o = Modeladoption::select($oldncin);
             if($o!=null){
                 $u = $o->update($tab, $oldncin);		
                 $pagetitle = "Utilisateur modifié";
                 $view = "updated";
                 require ("{$ROOT}{$DS}view{$DS}view.php");
             }
         }	
         break;
 }






?>