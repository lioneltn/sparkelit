<?PHP
include "../../../../config.php";
class AdminC
{
     function ajouterAdmin($admin, $type)
     {
          $sql = "insert into utilisateur values (:nom, :prenom, :email, :datenaissance, :motdepasse, :sexe)";
          $db = config::getConnexion();
          try {
               $req = $db->prepare($sql);

               $req->bindValue(':nom', $admin->getNom());
               $req->bindValue(':prenom', $admin->getPrenom());
               $req->bindValue(':email', $admin->getEmail());
               $req->bindValue(':datenaissance', $admin->getDateNaissance());
               $req->bindValue(':motdepasse', $admin->getMotdepasse());
               $req->bindValue(':sexe', $admin->getSexe());


               $req->execute();
          } catch (Exception $e) {
               echo 'Erreur: ' . $e->getMessage();
          }

          $sql = "insert into admin values (:login, :type)";
          $db = config::getConnexion();
          try {
               $req = $db->prepare($sql);

               $login = $admin->getEmail();
               $type = $admin->getType();

               $req->bindValue(':login', $login);
               $req->bindValue(':tel', $type);

               $req->execute();
          } catch (Exception $e) {
               echo 'Erreur: ' . $e->getMessage();
          }
     }

     function modifierAdmin($admin, $email)
     {
          if ($email = $admin->getEmail()) {
                    $sql_u = "update utilisateur set nom = :nom, prenom = :prenom, datenaissance = :datenaissance, sexe = :sexe where email = :email";
                    $sql_a = "update admin set login = :login, type = :type";
               } else {
               /*$sql_ud = "delete utilisateur where email = $email";
               $sql_ad = "delete admin where login = $email";*/

               $sql_u = "update utilisateur set nom = :nom, prenom = :prenom, datenaissance = :datenaissance, sexe = :sexe where email = :email";
               $sql_a = "update admin set login = :login, type = :type";
          }

          $db = config::getConnexion();
          try {
               $req = $db->prepare($sql_u);

               $req->bindValue(':nom', $admin->getNom());
               $req->bindValue(':prenom', $admin->getPrenom());
               $req->bindValue(':email', $admin->getEmail());
               $req->bindValue(':datenaissance', $admin->getDateNaissance());
               $req->bindValue(':sexe', $admin->getSexe());


               $req->execute();
          } catch (Exception $e) {
               echo 'Erreur: ' . $e->getMessage();
          }

          $db = config::getConnexion();
          try {
               $req = $db->prepare($sql_a);

               $req->bindValue(':login', $admin->getEmail());
               $req->bindValue(':type', $admin->getType());

               $req->execute();
          } catch (Exception $e) {
               echo 'Erreur: ' . $e->getMessage();
          }
     }

     function recupererAdmin($email)
     {
          $sql = "select * from utilisateur where email = :email";
          $db = config::getConnexion();
          try {
               $liste = $db->prepare($sql);
               $liste->bindValue(':email', $email);
               $liste->execute();
               return $liste;
          } catch (Exception $e) {
               die('Erreur: ' . $e->getMessage());
          }
     }
}
