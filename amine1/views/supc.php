<?php

require '../entites/admin.php';
require '../core/gestionutilisateur.php';




        $em=new adminmanage();
        $em->supprimerClient($_GET["show"]);         
        header("Location: affichierclients.php");   

?>