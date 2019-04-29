<?php
  class connexion {
    private static $instance = NULL;

    public static function seconnecter() {
      if (!isset(self::$instance)) {
		try{
			$nom="gaspenisie";
        self::$instance = new PDO("mysql:host=localhost;dbname=$nom", 'root', '');
        echo"connecteddddddd";
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }
?>