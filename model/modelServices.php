<?php

require_once("model.php");

class ModelServices extends Model{
    private $id= NULL;
    private $id_reservation;
    private $food;
    private $walk;
    private $both;
    private $commentaire;

  
   
    protected static $table = 'services';
    protected static $primary = 'id';




    public function __construct(  $id_reservation = NULL , $food = NULL, $walk = NULL  , $both = NULL  , $commentaire = NULL)
    {
        if (!is_null($food) && !is_null($walk) && !is_null($both) && !is_null($id_reservation) ) {
            $this->id_reservation = $id_reservation;
            $this->food = $food;
            $this->walk = $walk;
            $this->both = $both;
            $this->commentaire = $commentaire;

          

          
           }
        
    }

    public function getId(){
        return $this->id;
    }
    public function getfood(){
        return $this->food;
    }
    public function getwalk(){

        return $this->walk;
    }
    public function getboth(){
        return $this->both;
    }

    public function getid_reservation(){
        return $this->both;
    }

    public function getCommentaire(){
        return $this->commentaire;
    }



}


?>