<?php

require '../entites/client.php';
require '../core/gestionclient.php';

//session_start();
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$log=$_POST['login'];
$mdp=$_POST['motdepasse'];
$sexe=$_POST['sexe'];
$age=$_POST['age'];
$numtel=$_POST['numtel'];
$activite=1;
$today = date("Y-m-d");  
echo" $nom , $prenom,$mdp,$sexe,$age,$numtel,$activite,$today";
$nuser=new client($nom,$prenom,$log,$mdp,$sexe,$age,$numtel,$today,$activite);
//if(isset ($_GET['submit']))

	if(!empty($_POST['login'])&&!empty($_POST['motdepasse']))
	
       {       $em=new clientmanage();
            $em->inscription($nuser);
            echo"<script>alert('Félicitation :inscription ');</script>"; 
            header("Location:pagelogin.php");
//require_once'login.php';   
    }//}
    else
    {
        
            echo"<script>alert(' Champs Vides');</script>"; 
            header("Location:inscriptionn.php");
      
    }
  

?>