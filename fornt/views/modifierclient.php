<?php

require '../entites/client.php';
require '../core/gestionclient.php';


	if(!empty($_POST['nom'])&&!empty($_POST['prenom'])&&!empty($_POST['motdepasse']))
   {     $numtel=222;
         $cl=new client($_POST['nom'],$_POST['prenom'],$_POST['log'],$_POST['motdepasse'],$numtel);
         $em=new clientmanage();
         $list= $em->modifier($_POST['log'],$cl);         
         //header("Location: login.php"); 
    } 
   
    

else
{
            echo"<script>alert('Il y a des Champs Vides ');</script>"; 
       
           

}
?>