<?php
require'../config.php';
class reviewmanage
{
	function ajoutreview($review)
	{
		$req= "INSERT INTO `review` VALUES (:qualite,:fiabilite,:support,:avis,:email,:termes,:etat,:date,:user);"; 
        $db= config::getconnexion();
        //var_dump($employe);die;
        $sql= $db->prepare($req);
        $qualite=$review->getqualite();
        $fiabilite=$review->getfiabilite();
        $support=$review->getsupport();
        $avis=$review->getavis();
        $email=$review->getemail();
        $termes=$review->gettermes();
        $etat=$review->getetat();
        $date=$review->getdate();
        $user=$review->getuser();
        $sql->bindValue(':qualite',$qualite);
        $sql->bindValue(':fiabilite',$fiabilite);
        $sql->bindValue(':support',$support);
        $sql->bindValue(':avis',$avis);
        $sql->bindValue(':email',$email);
        $sql->bindValue(':termes',$termes);
        $sql->bindValue(':etat',$etat);
        $sql->bindValue(':date',$date);
        $sql->bindValue(':user',$user);

        try 
        {
            $sql->execute();
        } catch (Exception $e)
        {
            echo $e->getMessage();
        }
	}
	function affichiertout()
	{

 
	   $req="SELECT * FROM `review` ";
            
        $db= config::getconnexion();
     
        
        $sql= $db->prepare($req);
 
        try {
            $sql->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
         
         return $sql->fetchAll();  

	}
	 function supprimer($user){
        
		$req="DELETE FROM `review` WHERE user='".$user."'";
		  $db= config::getconnexion();
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
         function affichierreview($log)
    {
	   
       $req="SELECT * from `review` where user='".$log."'";
            
        $db= config::getconnexion();
               $sql= $db->query($req);
 
        try {
            $sql->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
         
         return $sql->fetchAll();
    }
    function lire($login){
		$req="UPDATE `review` SET `etat`=1 WHERE user='".$login."'";
		  $db= config::getconnexion();

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
	function notification(){
		      $cin="0";
		$req="SELECT * FROM `review` WHERE etat='".$cin."'";
		  $db= config::getconnexion();
                $P=$db->query($req);
    $nb=0;
    while ($donne=$P->fetch())
    	 {
    	 	
    	 		$nb++;
    	 
         }
   
    	return $nb;
	}
}