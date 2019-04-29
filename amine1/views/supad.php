<?php

require '../entites/admin.php';
require '../core/gestionutilisateur.php';




        $em=new adminmanage();
        $em->supprimerAdmin($_GET["show"]);         
        header("Location: affichieradmin.php");   

?>