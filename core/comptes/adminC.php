<?PHP
chdir(__DIR__);

include "../../config4.php";
class AdminC
{
     function ajouterAdmin($admin)
     {
          $today = date("Y-m-d");
          $sql = "insert into utilisateur values (:nom, :prenom, :email, :datenaissance, :motdepasse, :sexe, :code, :dateAjout)";
          $db = config4::getConnexion();
          try {
               $req = $db->prepare($sql);

               $req->bindValue(':nom', $admin->getNom());
               $req->bindValue(':prenom', $admin->getPrenom());
               $req->bindValue(':email', $admin->getEmail());
               $req->bindValue(':datenaissance', $admin->getDateNaissance());
               $req->bindValue(':motdepasse', $admin->getMotdepasse());
               $req->bindValue(':sexe', $admin->getSexe());
               $req->bindValue(':code', "");
               $req->bindValue(':dateAjout', $today);

               $req->execute();
          } catch (Exception $e) {
               echo 'Erreur: ' . $e->getMessage();
          }

          $sql = "insert into admin values (:login, :type)";
          $db = config4::getConnexion();
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
          $sql_u = "update utilisateur set nom = :nom, prenom = :prenom, datenaissance = :datenaissance, sexe = :sexe, motdepasse = :pwd where email = :email";
          $db = config4::getConnexion();
          try {
               $req = $db->prepare($sql_u);

               $req->bindValue(':nom', $admin->getNom());
               $req->bindValue(':prenom', $admin->getPrenom());
               $req->bindValue(':email', $admin->getEmail());
               $req->bindValue(':datenaissance', $admin->getDateNaissance());
               $req->bindValue(':sexe', $admin->getSexe());
               $req->bindValue(':pwd', $admin->getmotdepasse());

               $req->execute();
          } catch (Exception $e) {
               echo 'Erreur: ' . $e->getMessage();
          }
     }


     function modifierAdminsansMdp($admin)
     {
          $sql_u = "update utilisateur set nom = :nom, prenom = :prenom, datenaissance = :datenaissance, sexe = :sexe where email = :email";
          $db = config4::getConnexion();
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
     }

     function listeComptes()
     {
          $sql = "select * from utilisateur u inner join admin a on u.email=a.login ORDER BY dateAjout DESC LIMIT 5 OFFSET 0";
          $db = config4::getConnexion();
          try {
               $liste = $db->prepare($sql);
               $liste->execute();
               return $liste;
          } catch (Exception $e) {
               die('Erreur: ' . $e->getMessage());
          }
     }

     function listeComptesClient()
     {
          $sql = "select * from utilisateur u inner join client a on u.email=a.login ORDER BY dateAjout DESC LIMIT 5 OFFSET 0";
          $db = config4::getConnexion();
          try {
               $liste = $db->prepare($sql);
               $liste->execute();
               return $liste;
          } catch (Exception $e) {
               die('Erreur: ' . $e->getMessage());
          }
     }
     
     function recupererAdmin($email)
     {
          //$sql = "select * from utilisateur where email = :email";
          $sql = "select u.nom, u.prenom, u.datenaissance, u.motdepasse, u.sexe, a.type from utilisateur u inner join admin a on u.email = a.login where u.email = :email";
          $db = config4::getConnexion();
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
          $db = config4::getConnexion();
          try {
               $liste = $db->prepare($sql);
               $liste->bindValue(':email', $email);
               $liste->execute();
               return $liste;
          } catch (Exception $e) {
               die('Erreur: ' . $e->getMessage());
          }
     }

     function supprimerAdmin($login) {
          $sql="DELETE FROM admin where login= :login";
            $db = config4::getConnexion();
          $req=$db->prepare($sql);
            $req->bindValue(':login',$login);
            try{
              $req->execute();
          }
          catch (Exception $e){
              die('Erreur: '.$e->getMessage());
          }
  
          $sql="DELETE FROM utilisateur where email= :login";
            $db = config4::getConnexion();
          $req=$db->prepare($sql);
            $req->bindValue(':login',$login);
            try{
              $req->execute();
          }
          catch (Exception $e){
              die('Erreur: '.$e->getMessage());
          }
      }
}
