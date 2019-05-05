<?PHP
session_start();
include "../../entities/comptes/client.php";
include "../../core/comptes/clientC.php";



$client1C = new ClientC();
date_default_timezone_set("Africa/tunis");
$today = date("Y-m-d h:i:sa");
if (isset($_POST['login']) and isset($_POST['motdepasse'])){
    echo $_POST['login'] ."&". $_POST['motdepasse'];
    $result = $client1C->recupererClient($_POST['login']);
    foreach($result as $row) {
        $mdp = $row['motdepasse'];
        $tel = $row['tel'];
    }
    if($mdp == $_POST['motdepasse']) {
include "Nexmo/src/NexmoMessage.php" ;


  

/**
   * To send a text message.
   *
   */

  // Step 1: Declare new NexmoMessage.
  $nexmo_sms = new NexmoMessage('72344e5f','FE6v7RlMiKJV5f67');

  // Step 2: Use sendText( $to, $from, $message ) method to send a message. 
  $text = "Connexion à 5icha.tn à ".$today;
  $telephone = "216".$tel;
  $info = $nexmo_sms->sendText( $telephone, '5icha', $text );

  // Step 3: Display an overview of the message
  
        $_SESSION['email'] = $_POST['login'];
        header('Location: index.php');
    } else {
        echo "Mot de passe incorrect";
    }
}
	
else{
	echo "vérifier les champs";
}
?>