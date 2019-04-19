<?php 
var_dump($_POST);
extract($_POST);
echo $objets;
echo $le_mail;
echo $contenu;
echo $header;

if((!empty($_POST["objets"]) && !empty($_POST["contenu"])) && !empty($_POST["le_mail"])){
    
	extract($_POST);
	$header="From: borFashion <bor.fashion@gmail.com>\n";
	$header.="MIME-Version: 1.0\r\n";
	$header.="Content-type: text/html;charset=UTF-8\n";
	$header.="Content-Transfer-Encoding: 8bit";
  
	if(mail($le_mail,$objets,$contenu,$header)){
		echo "ok";
// $to = "+21654426394@sms.clicksend.com";
// $from = "zied.lazrak@esprit.tn";
// $message = "This is a text message\nNew line...";
// $headers = "From: $from\n";
//mail($to, '', $message, $headers);
}
else{
	echo "non";
}
}
else{
	echo "nons";
}
header("Location:orders.php");

?>