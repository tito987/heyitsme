<?PHP

include_once "gestionutilisateur.php";
class supermanage extends adminmanage{


	function ajoutsuperadmin($admin){
            
       $req=parent::ajoutadmin($admin);
		try{
		    $req->bindValue(':metier',$metier, PDO::PARAM_STR);
            return $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function updatesuperadmin($login,$admin)
{   $req=parent::Modifieradmin($login,$admin);
        
        try{
            $metier="supervisor";
        $req->bindValue(':metier',$metier);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }


}
}
?>