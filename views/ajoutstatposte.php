<?php 
chdir(__DIR__);
include "../core/statpostcore.php";
include "../entities/statpost.php";
$statC= new statpostC();
$stat= new statpost($_POST["1"],$_POST["2"],$_POST["3"]);
$output='<h1 style>Bilan des postes</h1>';
$statC->ajoutStat($stat);
$liste=$statC->afficherstat();
foreach ($liste as $row) 
{
	$output.="Date: ".$row['date']."<br>"."Postes sans commantaires:  ".$row['sanscommantaire']."<br>"."Postes avec commantaires et notes:  ".$row['aveccommantaire']."<br>"."Postes sans notes:  ".$row['sansnote']."<br>"."--------------------------------------------------"."<br>";


}
//echo $output;
require_once('tcpdf-master/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  

      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Bilan des postes");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 20);  
      $obj_pdf->AddPage();  

       
      $content .= $output;
       
        
      $obj_pdf->writeHTML($content); 
      ob_end_clean(); 
      $obj_pdf->Output('file.pdf', 'I');
      echo "hello";
      
 ?>