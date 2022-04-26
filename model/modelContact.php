<?php

require_once("model.php");

class ModelContact extends Model{
    private $id = NULL;
    private $name;
    private $lastname;
    private $email;
    private $phone;
    private $message;

    protected static $table = 'contact';
    protected static $primary = 'id';


    public function __construct( $name = NULL, $lastname = NULL , $email = NULL 
    , $phone = NULL, $message = NULL)
    {
       
        if (!is_null($name) && !is_null($lastname) && !is_null($email) 
         && !is_null($phone) 
        && !is_null($message)) 
        {

            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
           
            $this->phone = $phone;
            
            $this->message = $message;

         

        }
    }

    
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function getEmail(){
        return $this->email;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getMessage(){
        return $this->message;
    }


}


?>