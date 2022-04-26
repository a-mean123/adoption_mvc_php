<?php

require_once("model.php");

class ModelAdoption extends Model{
    private $id = NULL;
  
    private $typeAnimal;
    private $race;
    private $nom;
    private $age;
    private $sexe;
    private $image;


    protected static $table = 'adoption';
    protected static $primary = 'id';


    public function __construct( $typeAnimal = NULL ,$race = NULL, $nom = NULL  , 
     $age = NULL, $sexe = NULL, $image = NULL)
    {
       
        if (
         !is_null($typeAnimal) && !is_null($race)&& !is_null($nom)
        && !is_null($age)&& !is_null($sexe) && !is_null($image)) 
        {

       
            
            $this->typeAnimal = $typeAnimal;
            $this->race = $race; 
            $this->nom = $nom; 
            $this->age = $age; 
            $this->sexe = $sexe; 
  
   
            $this->image = $image;


         

        }
    }

    
    public function getId(){
        return $this->id;
    }


    public function gettypeAnimal(){
        return $this->typeAnimal;
    }

    public function getrace(){
        return $this->race;
    }

    public function getNom(){
        return $this->nom;
    }

 

    public function getSexe(){
        return $this->sexe;
    }


    public function getAge(){
        return $this->age;
    }



    public function getImage(){
        return $this->image;
    }



}


?>