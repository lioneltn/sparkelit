<?php $characts = 'abcdefghijklmnopqrstuvwxyz';
$characts .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$characts .= '1234567890';
$code_aleatoire = '';
for ($i = 0; $i < 10; $i++) {
        $code_aleatoire .= substr($characts, rand() % (strlen($characts)), 1);
    }
echo $code_aleatoire;
?>
<?php
session_start();
include "../../core/comptes/clientC.php";
$adminC = new clientC();
$result = $adminC->recupererClient($_POST['email']);
foreach ($result as $row) {
    $prenom = $row['prenom'];
}
$_SESSION['forgot_client'] = $_POST['email'];
$email = $_POST['email'];
$to = $_POST['email'];
$subject = "Vous avez oublié votre mot de passe ?";
$txt = "
                Click here if this message doesn't display correctly 
                
                
                Bonjour  " . $prenom . ",
                
                Vous avez oublié votre mot de passe?
                Vous pouvez le réinitialiser en cliquant sur ce lien: 
                http://localhost/projetWebv6/sparkelit/views/frontend/new_password-2.php?code=$code_aleatoire
                
                N'hésitez pas à visiter nos nombreuses boutiques! 5icha s'est associé avec les plus grandes marques internationales pour vous offrir le plus grand choix, au meilleur prix. 
                Bon shopping!
                
                Cordialement,
                Toute l’équipe de 5icha
                DECOUVREZ NOTRE VASTE GAMME DE PRODUITS
                
                           
                
                
                A propos de 5icha  |  Comment ça marche  |  Contact 
                
                
                Que ce soit pour une question ou une suggestion, contactez nous au: 
                Service client: +216 55023485     -   Email: benyounesfiras@gmail.com 
                
                
                ";
//$headers = "From: arthurwilliam.ngassanguesseu@esprit.tn" . "\r\n" .
"CC: somebodyelse@example.com";

//mail($to, $subject, $txt, $headers);
mail($to, $subject, $txt);
echo "<html><header><title>Confirmation</title><meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
                <title>CloudUi Premium Bootstrap Admin Dashboard Template</title>
                <!-- plugins:css -->
                <link rel=\"stylesheet\" href=\"../backend/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css\">
                <link rel=\"stylesheet\" href=\"../backend/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css\">
                <link rel=\"stylesheet\" href=\"../backend/vendors/css/vendor.bundle.base.css\">
                <link rel=\"stylesheet\" href=\"../backend/vendors/css/vendor.bundle.addons.css\">
                <!-- endinject -->
                <!-- plugin css for this page -->
                <!-- End plugin css for this page -->
                <!-- inject:css -->
                <link rel=\"stylesheet\" href=\"../backend/css/style.css\"></header><body><div class=\"alert alert-success alert-intro\" role=\"alert\">Email envoyé</div></body></html>";

                $verif = "select motdepasse from utilisateur where email = :email";
                $db = config4::getConnexion();
                try {
                    $req = $db->prepare($verif);
        
                    $req->bindValue(':email', $_POST['email']);
        
                    $req->execute();
                } catch (Exception $e) {
                    echo 'Erreur: ' . $e->getMessage();
                }
                
                $sql = "update utilisateur set code = :code where email = :email";
                $db = config4::getConnexion();
                try {
                    $req = $db->prepare($sql);
        
                    $req->bindValue(':code', $code_aleatoire);
                    $req->bindValue(':email', $_POST['email']);
        
                    $req->execute();
                } catch (Exception $e) {
                    echo 'Erreur: ' . $e->getMessage();
                }
?>