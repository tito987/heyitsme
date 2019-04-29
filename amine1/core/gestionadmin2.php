<?PHP

include_once "gestionutilisateur.php";
class assisstantmanage extends adminmanage{


	function ajoutassisstant($assisstant){
            
$req= "INSERT INTO `adminstrateurs` VALUES (:login,:mdp,:metier);"; 
        $db= connexion::seconnecter();
        //var_dump($employe);die;
        $sql= $db->prepare($req);
        $log=$assisstant->getLogin();
        $mdp=$assisstant->getmotdepasse();
        $metier=$assisstant->getmetier();
        $sql->bindValue(':login',$log);
        $sql->bindValue(':mdp',$mdp);
        $sql->bindValue('metier',$metier);
        try 
        {
            $sql->execute();
        } catch (Exception $e)
        {
            echo $e->getMessage();
        }
	}
	
	function updateassisstant($admin)
	{
	   $req=parent::Modifieradmin($login,$admin);
		
		try{
		$metier=$admin->getmetier();
		$req->bindValue(':metier',$metier);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
}
?>
