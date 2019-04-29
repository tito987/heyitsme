<?php



require'../views/pageajout.html';


//session_start();

$log=$_POST['login'];
$mdp=$_POST['motdepasse'];
$role=$_POST['role'];
$test="supervisor";
$unicite=false;

//var_dump($pers);
	if(!empty($_POST['login'])&&!empty($_POST['motdepasse']))
    { //require '../entites/administrateursdequipe.php';
   require'../entites/administrateursdassistance.php'; 
      require '../core/gestionsuperadmin.php';
        $em=new adminmanage();
        $list=array();
        $li=$em->confirmer();
        $list=$li;
       foreach($list as $val){     
         if( ( $val['Login'] ==$_POST['login']) ) {$unicite=true;}}

      if(!$unicite){
      if(($_POST['role'])==$test)
      {       
                 $nuser=new admin($_POST['login'],$_POST['motdepasse']);  
                 $em=new  adminmanage();
                 $em->ajoutadmin($nuser);
                 echo"<script>alert('Felicitation :Un nouveau superAdmin est ajoute ');</script>"; 
//require_once'login.php'; 
             }
         else
            {   
                //
                 require'../core/gestionadmin2.php';
                 $nuser=new assisstant ($_POST['login'],$_POST['motdepasse'],$_POST['role']);  
                $em=new  assisstantmanage();
                $em->ajoutassisstant($nuser);
                 echo"<script>alert('Félicitation :Un nouveau Admin est ajouté ');</script>"; 
            }
          }
    else
      {
        echo"<script>alert('Utilisateur Existe ');</script>";
      }

     } 
    
    else
    {
        
            echo"<script>alert(' Champs Vides');</script>"; 
        //header("Location: pageajout.html");
    }

    

?>