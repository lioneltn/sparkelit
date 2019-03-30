<?PHP
session_start();
include "../../config.php";
    $sql = "update utilisateur set motdepasse = :mdp where email = :email";
    $db = config::getConnexion();
          try {
               $req = $db->prepare($sql);

               $req->bindValue(':email', $_SESSION['email']);
               $req->bindValue(':mdp', $_POST['password']);
               $req->execute();
          } catch (Exception $e) {
               echo 'Erreur: ' . $e->getMessage();
          }
?>