<?php

    

$controller = 'login';
  
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 


   
require_once("{$ROOT}{$DS}model{$DS}modelUser.php");



if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="login";	
	
switch ($action) {


	case "created":	
		if(isset($_REQUEST['email']) && isset($_REQUEST['password']) ){
            $email = $_REQUEST['email'];
			$password = $_REQUEST['password'];
            echo $password;
            echo $email;


            $u = ModelUser::login($email , md5($password));
            
            if($u){
                $nb=$u->rowCount();

                echo $nb;
                
                if($nb==0)
                {
                    echo 'errrrr';
                }
                else
                {
                $ligne=$u->fetchObject();
                
                if($ligne->role == 1)
                {
                    $_SESSION['role']=1;
                
                    header("location: index.php?controller=admin");
                    exit;
                
                }
                
                else
                {
                    $_SESSION['role']=2;
                    header("location: index.php?controller=reservation");
                    exit;
                
                    
                }
                }
            }else{
                header("location: index.php?controller=login");
            }

        }	
		break;
		

		
	case "login":
		$pagetitle = "Login";
		$view = "login";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
    case "exit":
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 

        unset($_SESSION['role']);
        session_destroy();

        $view = "login";
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
            
		

}







?>