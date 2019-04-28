<?php

//create_pdf.php


include('pdf.php');

if(isset($_POST["hidden_html"]) && $_POST["hidden_html"] != '')
{
 $file_name = '5icha_chart.pdf';
 $html = '<link rel="stylesheet" href="../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="../css/style.css">
   ';


 $html .= $_POST["hidden_html"];

 $pdf = new Pdf(array('enable_remote' => true));

 $pdf->load_html($html);
 $pdf->render();
 $output = $pdf->output();
 file_put_contents('chart.pdf', $output);

 $pdf->stream($file_name, array("Attachment" => false));
}
else{
	echo"hello world";
}

?>
