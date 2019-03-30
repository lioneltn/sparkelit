<?PHP
include "../../../../config.php";
class AdminC
{
     function ajouterAdmin($admin)
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

               $req->bindValue(':login', $admin->getEmail());
               $req->bindValue(':type', $admin->getType());

               $req->execute();
          } catch (Exception $e) {
               echo 'Erreur: ' . $e->getMessage();
          }
     }

     function modifierAdmin($admin)
     {
          $sql_u = "update utilisateur set nom = :nom, prenom = :prenom, datenaissance = :datenaissance, sexe = :sexe, motdepasse = :password where email = :email";
          $db = config::getConnexion();
          try {
               $req = $db->prepare($sql_u);

               $req->bindValue(':nom', $admin->getNom());
               $req->bindValue(':prenom', $admin->getPrenom());
               $req->bindValue(':email', $admin->getEmail());
               $req->bindValue(':datenaissance', $admin->getDateNaissance());
               $req->bindValue(':sexe', $admin->getSexe());
               $req->bindValue(':password', $admin->getMotdepasse());

               $req->execute();
          } catch (Exception $e) {
               echo 'Erreur: ' . $e->getMessage();
          }
          /*
          if ($email == $admin->getEmail()) {
               $sql_u = "update utilisateur set nom = :nom, prenom = :prenom, datenaissance = :datenaissance, sexe = :sexe, motdepasse = :password where email = :email";
          } else {
               echo "different ";
               $sql_ad = "delete admin where login = $email";
               $db = config::getConnexion();
               try {
                    $req = $db->prepare($sql_ad);
                    $req->bindValue(':email', $admin->getEmail());

                    $req->execute();
               } catch (Exception $e) {
                    echo 'Erreur: ' . $e->getMessage();
               }

               $sql_ud = "delete utilisateur where email = $email";
               $db = config::getConnexion();
               try {
                    $req = $db->prepare($sql_ud);
                    $req->bindValue(':email', $admin->getEmail());

                    $req->execute();
               } catch (Exception $e) {
                    echo 'Erreur: ' . $e->getMessage();
               }
               $_SESSION['email_admin'] = $admin->getEmail();
               $sql_u = "insert utilisateur into values (:nom, :prenom, :email, :datenaissance, :password, :sexe)";
               $sql_a = "insert into admin values (:login, :type)";
          }

          

          if ($email != $admin->getEmail()) {
               $db = config::getConnexion();
               try {
                    $req = $db->prepare($sql_a);

                    $req->bindValue(':login', $admin->getEmail());
                    $req->bindValue(':type', $admin->getType());

                    $req->execute();
               } catch (Exception $e) {
                    echo 'Erreur: ' . $e->getMessage();
               }
          }*/
     }

     function recupererAdmin($email)
     {
          //$sql = "select * from utilisateur where email = :email";
          $sql = "select u.nom, u.prenom, u.datenaissance, u.motdepasse, u.sexe, a.type from utilisateur u inner join admin a on u.email = a.login where u.email = :email";
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

     function recupererType($email)
     {
          $sql = "select type from admin where login = :email";
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
