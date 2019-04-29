<?php

require '../core/gestionreview.php';




        $em=new reviewmanage();
        $em->supprimer($_GET["show"]);         
        header("Location: listreview.php");   

?>