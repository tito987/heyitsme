<?php

require '../entites/admin.php';
require '../core/gestionadmin.php';


	if(!empty($_POST['login'])&&!empty($_POST['mdp']))
    {
$ad=new admin($_POST['login'],$_POST['mdp']);

         $em=new adminmanage();
         $list= $em->modifierAdmin($_POST['login'],$ad);         
        header("Location: afficheradmin.php");   

    }
else
{
            echo"<script>alert('Veuiller remplir les champs  ');</script>"; 
           

}
?>