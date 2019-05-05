
<?php 
    session_start();
    include "../../core/CommandeC.php";
include "Nexmo/src/NexmoMessage.php";
/**
   * To send a text message.
   *
   */

  // Step 1: Declare new NexmoMessage.
  $nexmo_sms = new NexmoMessage('8d6dbf99','nf88fwRKw1M2CJoM');

  // Step 2: Use sendText( $to, $from, $message ) method to send a message. 
  $text = "commande validée";
  $telephone = "+216 56 058 127";
  $info = $nexmo_sms->sendText( $telephone, '5icha', $text );

  // Step 3: Display an overview of the message
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Historique</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">
    
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
       <style>
        td {
/*            padding:50px 50px;*/
            text-align:center;
        }

    </style>
</head>
<body>
    <?PHP
    include "../../entities/comptes/client.php";
    include "../../core/comptes/clientC.php";

    if (isset($_SESSION['email'])) {
        $clientC = new ClientC();
        $result = $clientC->recupererClient($_SESSION['email']);
        foreach ($result as $row) {
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $datenaissance = $row['datenaissance'];
            $sexe = $row['sexe'];
            $password = $row['motdepasse'];
            $tel = $row['tel'];
            $code = $row['codePostal'];
            $addlivr = $row['adresse'];
        }
    }
    ?>
    <div class="page-wrapper">
       
        <?php include"header2.php";?>
         
           
        <main class="main">
            
         <div style="margin:200px 30px" id="historique"><?php 
             if(!empty($_SESSION["login"]))
                  CommandeC ::afficherHistorique($_SESSION["login"]);
                ?></div>       
             </table>
        </main>       
          

    </div><!-- End .page-wrapper -->


   

  
      

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.min.js"></script>
    <script>
   $(function(){
    $('[type="button"]').click(function(){
        $(this).each(function(){
           $(this).parent().parent().hide();
            let image=$(this).attr("id");
             $.post("supprimerPanier.php", {
                      image:image
                    },
                    function(data, status) {

//                        alert(data, status);


                    });
        })
    })

})
</script>

</body>
 <?php include "footer2.php";?>
</html>