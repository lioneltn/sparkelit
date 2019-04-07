<?PHP
include "../../config.php";
class UtilisateurC
{
    function ajouterUtilisateur($utilisateur)
    {
        $sql = "insert into utilisateur values (:nom, :prenom, :email, :datenaissance, :motdepasse, :sexe)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':nom', $utilisateur->getNom());
            $req->bindValue(':prenom', $utilisateur->getPrenom());
            $req->bindValue(':email', $utilisateur->getEmail());
            $req->bindValue(':datenaissance', $utilisateur->getDateNaissance());
            $req->bindValue(':motdepasse', $utilisateur->getMotdepasse());
            $req->bindValue(':sexe', $utilisateur->getSexe());
            
            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function modifierUtilisateur($utilisateur)
    {
        
    }
}
