<?php
	function generateRow(){
		$contents = '';

require '../core/gestionutilisateur.php';
require '../entites/admin.php';
    $req = 'SELECT * FROM clients';
    $db = Connexion::seconnecter();
    $sql = $db->query($req);
        while ($reponse=$sql->fetch()) 		
     {
			$contents .= "
			<tr>

				<td>".$reponse['nom']."</td>
				<td>".$reponse['prenom']."</td>
				<td>".$reponse['login']."</td>
                <td>".$reponse['sexe']."</td>

				<td>".$reponse['age']."</td>
                <td>".$reponse['numerotel']."</td>
                <td>".$reponse['dateinscri']."</td>
                <td>".$reponse['activite']."</td>

			</tr>
			";
		}
		
		return $contents;
	}
?>
               	
<?php 
	require 'TCPDF-master/tcpdf.php';  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle("Liste des clients");  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '

        <div class="wrapper">

        
             <img src="gaspenesie.png" style="width:80px;height:50px;">
                 
                
           
            </div><hr>
            <p></p>
            <p></p>
      	
        <h2 align="center">Liste des clients</h2>
      	<p></p>
        <table class="table table-hover" border="1" cellspacing="0" cellpadding="2">  
           <tr>  
                <th width="11%">Nom de client</th>
				<th width="8%">Prénom de client</th>
				<th width="15%">Login</th> 
                <th width="9%">Sexe</th> 

                <th width="15%">Age</th> 
                <th width="20%">Date d inscription</th>
                <th width="15%">Numéro de telephone </th> 
               
           </tr>  
       ';  
    $content .= generateRow();  
    $content .= '</table>  <p></p><p></p> <p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p> <p></p><p></p><hr><p></p><div class="wrapper">

        
             <img src="gaspenesie.png" class="center" style="width:80px;height:50px;">
                 
                
           
            </div>';  
    $pdf->writeHTML($content); 
    ob_end_clean(); 
    $pdf->Output('Client.pdf', 'I');
	

?>