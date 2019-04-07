<?PHP
include "../../entities/comptes/utilisateur.php";
include "../../core/comptes/utilisateurC.php";

$compte1 = new Utilisateur($_POST['firstName'], $_POST['lastName'], $_POST['dateNaissance'], $_POST['password'], $_POST['email'], $_POST['sexe']);
$compte1C = new UtilisateurC();
$compte1C->ajouterUtilisateur($compte1);
?>