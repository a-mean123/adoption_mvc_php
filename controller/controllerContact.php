<?php

    
$controller = 'contact';
      
 //   require("{$ROOT}{$DS}view{$DS}view.php");


 require_once ("{$ROOT}{$DS}model{$DS}modelContact.php"); // chargement du modèle

 if(isset($_REQUEST['action']))	
 /* recupère l'action passée dans l'URL*/
     $action = $_REQUEST['action'];
 /* NB: On a ajouté un comportement par défaut avec action=readAll.*/
     else $action="creat";	
     
 switch ($action) {
     case "creat":
         $pagetitle = "Contactez nous";
         $view = "contact";
         require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
         break;
 
     case "read":	
         if(isset($_REQUEST['ncin'])){
             $ncin = $_REQUEST['ncin'];
             $u = ModelContact::select($ncin);
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
             $del = ModelContact::select($id);
             if($del!=null){
             $del->delete($id);
             header('Location: index.php?controller=admin&action=contact');
             }
         }
         break;
         

         
     case "created":
         if(isset($_REQUEST['name']) && isset($_REQUEST['lastname']) 
         && isset($_REQUEST['email'])  && isset($_REQUEST['phone'])  
         && isset($_REQUEST['message'])
         ){

             $name = $_REQUEST["name"];
             $lastname = $_REQUEST["lastname"];
             $email = $_REQUEST["email"];
            
             $phone = $_REQUEST["phone"];
            
             $message = $_REQUEST["message"];
            $id = NULL;
             
             
            
                 $u = new ModelContact($name, $lastname, $email , $phone, $message);	
                 $tab = array(
                 "id" => $id,    
                 "name" => $name,
                 "lastname" => $lastname,
                 "email" => $email,
              
                 "phone" => $phone,
                 
                 "message" => $message,


                 );		
                 
                 $u->insert($tab);
                 $pagetitle = "Contact Enregistré";
                 $view = "contact";
                 require ("{$ROOT}{$DS}view{$DS}view.php");
             
         }
         break;
     

         

 }






?>