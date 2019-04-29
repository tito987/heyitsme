<?php
class review
{
  
    private $qualite;
    private $fiabilite;
    private $support;
    private $avis;
    private $email;
    private $termes;
    private $etat;
    private $date;
    private $user;
      public function __construct($qualite,$fiabilite,$support,$avis,$email,$termes,$etat,$date,$user) {
      $this->qualite=$qualite;
      $this->fiabilite=$fiabilite;
      $this->support=$support;
      $this->avis=$avis;
      $this->email=$email;
      $this->termes=$termes;
      $this->etat=$etat;
      $this->date=$date;
      $this->user=$user;
     
       
  }
 
    public function getqualite(){
        return $this->qualite;
    }
     public function getfiabilite(){
        return $this->fiabilite;
    }
     public function getsupport(){
        return $this->support;
    }
     public function getavis(){
        return $this->avis;
    }
    public function getemail(){
        return $this->email;
    }
     public function gettermes(){
        return $this->termes;
    }
     public function getdate(){
        return $this->date;
    }
      public function getetat(){
        return $this->etat;
    }
    public function getuser()
    {
      return $this->user;
    }
    
    public function setqualite($qualite){
        $this->qualite=$qualite;
    }
    public function setprenom($support){
        $this->support=$support;
    }
     public function setavis($avis){
        $this->avis=$avis;
    }
    public function setemail($email){
        $this->email=$email;
    }
    public function settermes($termes){
        $this->termes=$termes;
    }
     public function setdate($date){
        $this->date=$date;
    }
      public function setetat($etat){
        $this->etat=$etat;
    }
    public function setuser($user)
    {
      $this->user=$user;
    }

    

  
    }

?>