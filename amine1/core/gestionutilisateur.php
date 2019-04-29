<?php
require'../connexion.php';
class adminmanage
{
    public function ajoutadmin($admin)    
    {
       
        $req= "INSERT INTO `adminstrateurs` VALUES (:login,:mdp,:metier);"; 
        $db= connexion::seconnecter();
        //var_dump($employe);die;
        $sql= $db->prepare($req);
        $log=$admin->getLogin();
        $mdp=$admin->getmotdepasse();
        $sql->bindValue(':login',$log);
        $sql->bindValue(':mdp',$mdp);
        $sql->bindValue('metier','supervisor');
        try 
        {
            $sql->execute();
        } catch (Exception $e)
        {
            echo $e->getMessage();
        }
    
}
        public function confirmer()    
    {
       
        $req= "select * from `adminstrateurs`;";
            
        $db= connexion::seconnecter();
   
        $sql= $db->prepare($req);
    
 
        try {
            $sql->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
         return $sql->fetchAll();
         
    }
      function affichiera()
    {
	   $req="SELECT * FROM `adminstrateurs` ";
            
        $db= connexion::seconnecter();
     
        
        $sql= $db->prepare($req);
 
        try {
            $sql->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
         
         return $sql->fetchAll();  
    }
     public function afficherClients()
    {
	   $req="SELECT * from `clients` ;";
            
        $db= connexion::seconnecter();
                //$sql= $db->query($req);
        
        $sql= $db->prepare($req);
 
        try {
            $sql->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
         
         return $sql->fetchAll();
    }
    
    function Modifieradmin($login,$admin){
		$req="UPDATE `adminstrateurs` SET `Login`=:login,`mot_de_passe`=: `metier`=:metier WHERE Login='".$login."'";
		  $db= connexion::seconnecter();
        //var_dump($employe);die;
        $sql= $db->prepare($req);
        

        $sql->bindValue(':login',$admin->getLogin());
         $sql->bindValue(':metier',$admin->getmetier());

        $sql->bindValue(':mdp',$admin->getmotdepasse());  
       

        try 
        {
            $sql->execute();
        } catch (Exception $e)
        {
            echo $e->getMessage();
        }
        
        return $sql->fetchAll();
		
	}
    
    function activer($login){
		$req="UPDATE `clients` SET `activite`=1 WHERE login='".$login."'";
		  $db= connexion::seconnecter();

        $sql= $db->prepare($req);
        try 
        {
            $sql->execute();
        } catch (Exception $e)
        {
            echo $e->getMessage();
        }
        
        //return $sql->fetchAll();
		
	}
    
    function desactiver($login){
		$req="UPDATE `clients` SET `activite`=0 WHERE login='".$login."'";
		  $db= connexion::seconnecter();
       
        $sql= $db->prepare($req);
        

       
       

        try 
        {
            $sql->execute();
        } catch (Exception $e)
        {
            echo $e->getMessage();
        }
        
       // return $sql->fetchAll();
		
	}
    
       function supprimerAdmin($login){
        
		$req="DELETE FROM `adminstrateurs` WHERE Login='".$login."'";
		  $db= connexion::seconnecter();
        //var_dump($employe);die;
        $sql= $db->prepare($req);
       

        try 
        {
            $sql->execute();
        } catch (Exception $e)
        {
            echo $e->getMessage();
        }
       }
    
     function supprimerClient($login){
        
		$req="DELETE FROM `clients` WHERE login='".$login."'";
		  $db= connexion::seconnecter();
    
        $sql= $db->prepare($req);
       

        try 
        {
            $sql->execute();
        } catch (Exception $e)
        {
            echo $e->getMessage();
        }
       }
    
    
     
     function afficheradmin1($login)
    {
	   
       $req="SELECT * from `adminstrateurs` where Login='".$login."'";
            
        $db= connexion::seconnecter();
               $sql= $db->query($req);
 
        try {
            $sql->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
         
         return $sql->fetchAll();
    }
    
    function rechercheradmin($rech){
               $req="SELECT * from `clients` where login like '%".$rech."%'";
        
            $db= connexion::seconnecter();
       
        $sql= $db->query($req);
 
        try {
            $sql->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
         
         return $sql->fetchAll();

    }
    
    public function stathomme(){
        
       $cin="h";
		$req="SELECT * FROM `clients` WHERE Sexe='".$cin."'";
		  $db= connexion::seconnecter();
     
        $P=$db->query($req);
    $nb=0;
    while ($donne=$P->fetch())
    	 {
    	 	
    	 		$nb++;
    	 
    }
   
    	return $nb;

  


  }
    
      public function statfemme(){
        
       $cin="f";
		$req="SELECT * FROM `clients` WHERE Sexe='".$cin."'";
		  $db= connexion::seconnecter();
                $P=$db->query($req);
    $nb=0;
    while ($donne=$P->fetch())
    	 {
    	 	
    	 		$nb++;
    	 
         }
   
    	return $nb;

  
    }
  
}
?>