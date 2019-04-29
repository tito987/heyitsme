   <?php



require '../entites/admin.php';
require '../core/gestionutilisateur.php';
 session_name('session_admin');
session_start();
    
        
        $email=$_POST['adresse'];
        $sujet='';
        $texte=$_POST['message'];
        $header='From :noreply@gaspenisie.tn';
        if (mail($email,$sujet,$texte,$header)==true)
        {
        	echo"Great";
        }
      

     
    
    
    ?>