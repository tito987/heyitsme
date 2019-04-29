<?php
class admin
{
  
    protected $login;
    protected $mdp;
    public function __construct($login,$mdp)
    {
      
        $this->login=$login;
        $this->mdp=$mdp;
    }
     public function getLogin(){
        return $this->login;
    }
    public function getmotdepasse(){
        return $this->mdp;
    }

    
     public function setLogin($login){
        $this->login=$login;
    }
    public function setmotdepasse($mdp){
        $this->mdp=$mdp;
    }

  
    }

?>