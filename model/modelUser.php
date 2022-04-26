<?php

require_once("model.php");

class ModelUser extends Model{
    private $id= NULL;
    private $pseudo;
    private $email;
    private $password;
    private $role;
  
   
    protected static $table = 'user';
    protected static $primary = 'id';
    protected static $user = 'email';
    protected static $pass = 'password';



    public function __construct(  $pseudo = NULL , $email = NULL, $password = NULL  , $role = NULL)
    {
        if (!is_null($email) && !is_null($password) && !is_null($role) && !is_null($pseudo) ) {
            $this->pseudo = $pseudo;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
          
           }
        
    }

    public function getId(){
        return $this->id;
    }
    public function getemail(){
        return $this->email;
    }
    public function getpassword(){

        return $this->password;
    }
    public function getrole(){
        return $this->role;
    }

    public function getpseudo(){
        return $this->role;
    }



}


?>