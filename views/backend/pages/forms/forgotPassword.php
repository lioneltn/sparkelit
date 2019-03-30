<?php
session_start();
include "../../../../core/comptes/adminC.php";
    $adminC = new adminC();
    $result = $adminC->recupererAdmin($_POST['email']);
    foreach($result as $row) { 
        $prenom = $row['prenom'];
    }
    $_SESSION['forgot'] = $_POST['email'];
                $to = $_POST['email'];
                $subject = "Vous avez oublié votre mot de passe ?";
                $txt = "
                Click here if this message doesn't display correctly 
                
                
                Bonjour  " . $prenom . ",
                
                Vous avez oublié votre mot de passe?
                Vous pouvez le réinitialiser en cliquant sur ce lien: 
                http://localhost/projetWeb/sparkelit/views/backend/pages/forms/new_password.php
                
                N'hésitez pas à visiter nos nombreuses boutiques! 5icha s'est associé avec les plus grandes marques internationales pour vous offrir le plus grand choix, au meilleur prix. 
                Bon shopping!
                
                Cordialement,
                Toute l’équipe de 5icha
                DECOUVREZ NOTRE VASTE GAMME DE PRODUITS
                
                           
                
                
                A propos de 5icha  |  Comment ça marche  |  Contact 
                
                
                Que ce soit pour une question ou une suggestion, contactez nous au: 
                Service client: +216     -   Email: customer@5icha.com.tn 
                
                
                ";
                //$headers = "From: arthurwilliam.ngassanguesseu@esprit.tn" . "\r\n" .
                    "CC: somebodyelse@example.com";

                //mail($to, $subject, $txt, $headers);
                mail($to, $subject, $txt);
                ?>