<?php

require '../entites/client.php';
require '../core/gestionclient.php';
session_name('session_client');
session_start();
$cl=new  clientmanage();
$list=$cl->desactivercompte($_GET['cin']);

header('location:Login.php');
?>