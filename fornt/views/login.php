<?php
require '../entites/client.php';
require '../core/gestionclient.php';

if(!empty($_POST['login'])&&!empty($_POST['mdp'])){
    $cl=new client($_POST['login'],$_POST['mdp']);
$em=new clientmanage();
$list=array();
$li=$em->confirmer();
$list=$li;
 $test = false;
     $l=$_POST['login'];
        echo"$l";
          $m=$_POST['mdp'];
        echo"$m";
 foreach($list as $val){     
    if( ( $val['login'] ==$_POST['login']) &&($val['motdepasse']==$_POST['mdp'])) 
    {     


        $test = true;//Initialise la variable 'connect'.
        echo"$test";
session_name('session_client');
session_start();

                
                $_SESSION['login']=$_POST['login'];
                $_SESSION['prenom']=$val['prenom'];
                $_SESSION['nom']=$val['nom'];
                $_SESSION['numerotel']=$val['numerotel'];
                $_SESSION['dateinscri']=$val['dateinscri'];
    header("Location:index.php");

    }
   
} 
    if (!$test)  {
     echo "<script>alert('veuiller verifier votre informations')</script>";
     require_once('pagelogin.php');

    }
}   
else{

    echo "<script>alert('veuiller remplir les champs')</script>";
         require_once('pagelogin.php');

}     

?>