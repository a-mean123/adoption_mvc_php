<?php

require_once("model.php");

class ModelReservation extends Model{
    private $id = NULL;
    private $pseudo_proprietaire;
    private $email_proprietaire;
    private $adresse;
    private $num_tel;
    private $typeAnimal;
    private $nb_chats;
    private $nb_chiens;
    private $race_chat;
    private $race_chien;
    private $age;
    private $date_arrivee;
    private $date_depart;
    private $image;


    protected static $table = 'reservation';
    protected static $primary = 'id';


    public function __construct( $pseudo_proprietaire = NULL, $email_proprietaire = NULL , $adresse = NULL 
    , $num_tel = NULL, $nb_chiens = NULL  , 
    $nb_chats = NULL, $race_chat = NULL, $race_chien = NULL, $age = NULL, $date_arrivee = NULL, $date_depart = NULL , $image = NULL)
    {
       
        if (!is_null($pseudo_proprietaire) && !is_null($email_proprietaire) && !is_null($adresse) 
         && !is_null($num_tel) 
        && !is_null($typeAnimal) && !is_null($nb_chats)&& !is_null($nb_chiens)
        && !is_null($race_chat)&& !is_null($race_chien)&& !is_null($age)&& !is_null($date_arrivee) && !is_null($date_depart) && !is_null($image)) 
        {

            $this->pseudo_proprietaire = $pseudo_proprietaire;
            $this->email_proprietaire = $email_proprietaire;
            $this->adresse = $adresse;
           
            $this->num_tel = $num_tel;
            
            $this->typeAnimal = $typeAnimal;
            $this->nb_chats = $nb_chats; 
            $this->nb_chiens = $nb_chiens; 
            $this->race_chat = $race_chat; 
            $this->race_chien = $race_chien; 
            $this->age = $age; 
            $this->date_arrivee = $date_arrivee; 
            $this->date_depart = $date_depart;
            $this->image = $image;


         

        }
    }

    
    public function getId(){
        return $this->id;
    }
    public function getpseudo_proprietaire(){
        return $this->pseudo_proprietaire;
    }
    public function getemail_proprietaire(){
        return $this->email_proprietaire;
    }
    public function getNum_tel(){
        return $this->num_tel;
    }


    public function gettypeAnimal(){
        return $this->typeAnimal;
    }

    public function getNb_chats(){
        return $this->nb_chats;
    }

    public function getNbChien(){
        return $this->nb_chiens;
    }

    public function getRaceChat(){
        return $this->race_chat;
    }

    public function getRaceChien(){
        return $this->race_chien;
    }


    public function getAge(){
        return $this->age;
    }

    public function getdate_arrivee(){
        return $this->date_arrivee;
    }

    public function getdate_depart(){
        return $this->date_depart;
    }

    public function getImage(){
        return $this->image;
    }



}


?>