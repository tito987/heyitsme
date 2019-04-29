<?php
require '../entites/admin.php';
require '../core/gestionutilisateur.php';
session_name('session_admin');
session_start();
$ad=new adminmanage;
$list=$ad->affichierAdmin();
?>