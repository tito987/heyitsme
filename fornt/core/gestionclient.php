<?php
require'../connexion.php';
class clientmanage
{
    public function inscription($client)    
    {
       
        $req= "INSERT INTO `clients` VALUES (:nom,:prenom,:login,:mdp,:sexe,:age,:numtel,:dateinscri,:activite);"; 
        $db= connexion::seconnecter();
        //var_dump($employe);die;
        $sql= $db->prepare($req);
        $nom=$client->getnom();
        $prenom=$client->getprenom();
        $log=$client->getlogin();
        $mdp=$client->getmotdepasse();
        $sexe=$client->getsexe();
        $age=$client->getage();
        $nutel=$client->getnumtel();
        $inscri=$client->getdateinscri();
        $ac=$client->getactivite();
        $sql->bindValue(':nom',$nom);
        $sql->bindValue(':prenom',$prenom);
        $sql->bindValue(':login',$log);
        $sql->bindValue(':mdp',$mdp);
        $sql->bindValue(':sexe',$sexe);
        $sql->bindValue(':age',$age);
        $sql->bindValue(':numtel',$nutel);
        $sql->bindValue(':dateinscri',$inscri);
        $sql->bindValue(':activite',$ac);
        


        try 
        {
            $sql->execute();
        } catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }
    function modifier($login,$client){
        $req="UPDATE `clients` SET `nom`=:nom,`prenom`=:prenom,`login`=:login,`motdepasse`=:mdp WHERE Login='".$login."'";
          $db= connexion::seconnecter();
        //var_dump($employe);die;
        $sql= $db->prepare($req);
        

        $nom=$client->getnom();
        $prenom=$client->getprenom();
        $log=$client->getlogin();
        $mdp=$client->getmotdepasse();
       
        $sql->bindValue(':nom',$nom);
        $sql->bindValue(':prenom',$prenom);
        $sql->bindValue(':login',$log);
        $sql->bindValue(':mdp',$mdp);
        
        try 
        {
            $sql->execute();
        } catch (Exception $e)
        {
            echo $e->getMessage();
        }
        
        
    }
    function supprimercompte($login){
        
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
        function activercompte($login){
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
function desactivercompte($login){
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
      public function confirmer()    
    {
       
        $req= "select * from `clients`;";
            
        $db= connexion::seconnecter();
   
        $sql= $db->prepare($req);
    
 
        try {
            $sql->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
         
    return $sql->fetchAll(); 
    }

}