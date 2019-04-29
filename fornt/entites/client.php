<?php
class client
{
  
    private $nom;
    private $prenom;
    private $login;
    private $mdp;
    private $sexe;
    private $age;
    private $nutel;
    private $dateinscri;
    private $activite;
      public function __construct() {
    $argv = func_get_args();
    switch( func_num_args() ) {
      case 2:
      self::__construct2($argv[0],$argv[1]);
      break;
      case 5:
        self::__construct0($argv[0], $argv[1], $argv[2],$argv[3],$argv[4]);
      break;
      case 9:
        self::__construct1( $argv[0], $argv[1], $argv[2],$argv[3],$argv[4],$argv[5],$argv[6],$argv[7],$argv[8] );
    }
  }
  public function __construct2($login,$mp)
  {
     $this->login=$login;
      $this->mdp=$mp;
  }

  public  function __construct0($nom,$prenom,$login,$mdp,$nutel)
    {
      
      $this->nom=$nom;
      $this->prenom=$prenom;
      $this->login=$login;
      $this->mdp=$mdp;
      $this->nutel=$nutel;
     
    }
   public function __construct1($nom,$prenom,$login,$mdp,$sexe,$age,$nutel,$dateinscri,$activite)
    {
      
      $this->nom=$nom;
      $this->prenom=$prenom;
      $this->login=$login;
      $this->mdp=$mdp;
      $this->sexe=$sexe;
      $this->age=$age;
      $this->nutel=$nutel;
      $this->dateinscri=$dateinscri;
      $this->activite=$activite;
       

    }

     public function getnom(){
        return $this->nom;
    }
     public function getprenom(){
        return $this->prenom;
    }
     public function getsexe(){
        return $this->sexe;
    }
     public function getLogin(){
        return $this->login;
    }
    public function getmotdepasse(){
        return $this->mdp;
    }
     public function getage(){
        return $this->age;
    }
     public function getdateinscri(){
        return $this->dateinscri;
    }
     public function getnumtel(){
        return $this->nutel;
    }
     public function getactivite(){
        return $this->activite;
    }
    
    public function setnom($nom){
        $this->nom=$nom;
    }
    public function setprenom($prenom){
        $this->login=$login;
    }
     public function setLogin($login){
        $this->login=$login;
    }
    public function setmotdepasse($mdp){
        $this->mdp=$mdp;
    }
    public function setsexe($sexe){
        $this->sexe=$sexe;
    }
     public function setnumtel($nutel){
        $this->nutel=$nutel;
    }
    

  
    }

?>