<?php
session_start();
include "../../../../core/comptes/adminC.php";
    $adminC = new adminC();
    $result = $adminC->recupererAdmin($_POST['email']);
    foreach($result as $row) { 
        $prenom = $row['prenom'];
    }
    $_SESSION['forgot'] = $_POST['email'];
    $email = $_POST['email'];
                $to = $_POST['email'];
                $subject = "Vous avez oublié votre mot de passe ?";
                $msg = "localhost/projetWeb/sparkelit/views/backend/pages/forms/new_password-3.php?email=<?= $email;?>";
                $message = "<a href='localhost/projetWeb/sparkelit/views/backend/pages/forms/new_password-3.php?email='.$email.'>lien</a>";
                $txt = "
                Click here if this message doesn't display correctly 
                
                
                Bonjour  " . $prenom . ",
                
                Vous avez oublié votre mot de passe?
                Vous pouvez le réinitialiser en cliquant sur ce lien: 
                <a href= \"localhost/projetWeb/sparkelit/views/backend/pages/forms/new_password-3.php?email=<?=$email;?>\" > lien</a>
                http://localhost/projetWeb/sparkelit/views/backend/pages/forms/new_password-3.php?email=$email
                
                N'hésitez pas à visiter nos nombreuses boutiques! 5icha s'est associé avec les plus grandes marques internationales pour vous offrir le plus grand choix, au meilleur prix. 
                Bon shopping!
                
                Cordialement,
                Toute l’équipe de 5icha
                DECOUVREZ NOTRE VASTE GAMME DE PRODUITS
                
                           
                
                
                A propos de 5icha  |  Comment ça marche  |  Contact 
                
                
                Que ce soit pour une question ou une suggestion, contactez nous au: 
                Service client: +216     -   Email: customer@5icha.com.tn 
                
                
                ";
                $headers = "MIME-Version: 1.0"."\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
                //$headers = "From: arthurwilliam.ngassanguesseu@esprit.tn" . "\r\n" .
                    "CC: somebodyelse@example.com";

                //mail($to, $subject, $txt, $headers);
                mail($to, $subject, $txt);
                echo "<html><header><title>Confirmation</title><meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
                <title>CloudUi Premium Bootstrap Admin Dashboard Template</title>
                <!-- plugins:css -->
                <link rel=\"stylesheet\" href=\"../../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css\">
                <link rel=\"stylesheet\" href=\"../../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css\">
                <link rel=\"stylesheet\" href=\"../../vendors/css/vendor.bundle.base.css\">
                <link rel=\"stylesheet\" href=\"../../vendors/css/vendor.bundle.addons.css\">
                <!-- endinject -->
                <!-- plugin css for this page -->
                <!-- End plugin css for this page -->
                <!-- inject:css -->
                <link rel=\"stylesheet\" href=\"../../css/style.css\"></header><body><div class=\"alert alert-success alert-intro\" role=\"alert\">Email envoyé</div></body></html>";
                ?>