<?PHP
include "../../config.php";
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

               $login = $admin->getEmail();
               $type = $admin->getType();

               $req->bindValue(':login', $login);
               $req->bindValue(':tel', $type);

               $req->execute();
          } catch (Exception $e) {
               echo 'Erreur: ' . $e->getMessage();
          }
     }

     function modifierAdmin($admin)
     { 
          
     }
}
