<?php
// chargement du modèle
require_once ("{$ROOT}{$DS}model{$DS}ModelUser.php");
if(isset($_REQUEST['action']))
/* recupère l'action passée dans l'URL*/
$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
else $action="register";
switch ($action) {
    case "readAll":
    $pagetitle = "Liste des users";
    $view = "readAll";
    $tab_u = ModelUser::getAll(); //appel de la fonc tion get all
    //"redirige" vers la vue
    require ("{$ROOT}{$DS}view{$DS}view.php");
    break;

    case "register":
		$pagetitle = "register";
		$view = "register";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;


    case "read":
        if(isset($_REQUEST['ncin'])){
        $ncin = $_REQUEST['ncin'];
        $u = ModelUser::select($ncin);
        if($u!=null){
        $pagetitle  = "Details de l'user";
        $view = "read";
        require ("{$ROOT}{$DS}view{$DS}view.php");
        }
        }
        break;

    case "delete":
    if(isset($_REQUEST['ncin'])){
    $ncin = $_REQUEST['ncin'];
    $del = ModelUser::select($ncin);
    if($del!=null){
    $del->delete($ncin);
    /*redirection vers le contrôleur et l’action par
    défaut*/
    header('Location:
    index.php?controller=user&action=readAll');
    }
    }
    break;

    case "create":
        $pagetitle = "Enregistrer un user";
        $view = "create";
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;


    case "created":
        if(
       
       isset($_REQUEST['email']) 
        && isset($_REQUEST['pseudo']) && isset($_REQUEST['password'])
        ){
      
        $email = $_POST["email"];
        $us = $_POST["pseudo"];
        $pass = md5($_POST["password"]) ;
        $role = 2;

        $recherche = ModelUser::select($email);
        if($recherche==null){
        $u = new ModelUser(  $us , $email  ,$pass , $role);
        $tab = array(
        "id"=>NULL,    
        "pseudo" => $us,
        "email" => $email,
       
        "password" => $pass,
        "role"=> $role
        );
        $u->insert($tab);
        header("location: index.php?controller=login");
        }
        }break;


    case "updated":
        if(isset($_REQUEST['ncin']) &&
        isset($_REQUEST['n']) && isset($_REQUEST['p'])){
        $oldncin = $_REQUEST ['ncin'];
        $tab = array(
        "ncin" => $_REQUEST["ncin"],
        "nom" =>$_REQUEST["n"],
        "prenom" => $_REQUEST ["p"] );
        $o = ModelUser::select($oldncin);
        if($o!=null){
        $u = $o->update($tab, $oldncin);
        header("location: index.php?controller=login");
        }
        }
        break;

    case "updated":
        if(isset($_REQUEST['ncin']) &&
        isset($_REQUEST['n']) && isset($_REQUEST['p'])){
        $oldncin = $_REQUEST ['ncin'];
        $tab = array(
        "ncin" => $_REQUEST["ncin"],
        "nom" =>$_REQUEST["n"],
        "prenom" => $_REQUEST ["p"] );
        $o = ModelUser::select($oldncin);
        if($o!=null){
        $u = $o->update($tab, $oldncin);
        $pagetitle = "User modifié";
        $view = "updated";
        require ("{$ROOT}{$DS}view{$DS}view.php");
        }
        }
        break;
} 
