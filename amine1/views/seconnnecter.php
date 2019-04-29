<?php
require '../entites/admin.php';
require '../core/gestionutilisateur.php';

$pers=new admin($_POST['login'],$_POST['mdp']);
$mim=$_POST['login'];
if(!empty($_POST['login'])&&!empty($_POST['mdp'])){
$em=new  adminmanage();
$list=$em->confirmer();
$array=array();
$array=$list;
    $test = false;
 foreach($array as $val){     
    if( ( $val['Login'] ==$_POST['login']) && ($val['motdepasse']==$_POST['mdp'])) 
    {
        $test = true;//Initialise la variable 'connect'.

session_name('session_admin');
session_start();

                
                $_SESSION['login']=$_POST['login'];
                $_SESSION['mdp']=$_POST['mdp'];
    $li=$em->afficheradmin1($_POST['login']);
    foreach($li as $val){     
    if( ( $val['metier'] =="supervisor")) 
    {
    header("Location:pageacceuil.php");

    }
    else
    {
        header("location:pageacceuilassisstant.php");
    }
}
   
   } 
    else
    {
     echo "<script>alert('Mot de passe ou Login erroné(e)')</script>";
     require_once('login.php');}

   
} }
else{

    echo "<script>alert('Champ vide !')</script>";
         require_once('login.php');

}     

?>