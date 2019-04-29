<?php

require '../entites/client.php';
require '../core/gestionclient.php';




        $em=new clientmanage();
        $em->supprimercompte($_GET["show"]);         
        header("Location:login.php");   

?>