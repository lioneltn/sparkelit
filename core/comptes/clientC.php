<?PHP
include "../../config.php";

class ClientC
{
    function ajouterClient($client)
    {
        $sql = "insert into utilisateur values (:nom, :prenom, :email, :datenaissance, :motdepasse, :sexe)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':nom', $client->getNom());
            $req->bindValue(':prenom', $client->getPrenom());
            $req->bindValue(':email', $client->getEmail());
            $req->bindValue(':datenaissance', $client->getDateNaissance());
            $req->bindValue(':motdepasse', $client->getMotdepasse());
            $req->bindValue(':sexe', $client->getSexe());


            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

        $sql = "insert into client values (:login, :tel, :code, :region, :addlivr, :addlivr_2)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $login = $client->getEmail();
            $tel = $client->getTel();
            $code = $client->getCodePostal();
            $addlivr = $client->getAddLivr();
            $addLivr_2 = $client->getAddLivr_2();

            $req->bindValue(':login', $login);
            $req->bindValue(':tel', $tel);
            $req->bindValue(':code', $code);
            $req->bindValue(':region', $client->getRegion());
            $req->bindValue(':addlivr', $addlivr);
            $req->bindValue(':addlivr_2', $addLivr_2);

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function recupererClient($login)
    {
        //$sql = "SELECT * from utilisateur where email = :email";
        $sql = "select u.nom, u.prenom, u.sexe, u.datenaissance, u.motdepasse, u.email, login, telephone, codepostal, region, adresselivraison, adresselivraison_2 from utilisateur u inner join client c on u.email = c.login where u.email=:email";
        $db = config::getConnexion();
        try {
            $client1 = $db->prepare($sql);

            $client1->bindValue(':email', $login);
            $client1->execute();
            return $client1;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function modifierClient($client)
    {
        $verif = "select motdepasse from utilisateur where email = :email";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($verif);

            $req->bindValue(':email', $client->getEmail());

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

        $sql = "update utilisateur set nom = :nom, prenom = :prenom, datenaissance = :datenaissance, sexe = :sexe where email = :email";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':nom', $client->getNom());
            $req->bindValue(':prenom', $client->getPrenom());
            $req->bindValue(':email', $client->getEmail());
            $req->bindValue(':datenaissance', $client->getDateNaissance());
            $req->bindValue(':motdepasse', $client->getMotdepasse());
            $req->bindValue(':sexe', $client->getSexe());


            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

        $sql = "update client set telephone = :tel, codepostal = :code, adresselivraison = :addlivr, adresselivraison_2 = :addlivr_2 where login = :login";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':login', $client->getEmail());
            $req->bindValue(':tel', $client->getTel());
            $req->bindValue(':code', $client->getCodePostal());
            $req->bindValue(':addlivr', $client->getAddLivr());
            $req->bindValue(':addlivr_2', $client->getAddLivr_2());

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function modifierClient_i($client)
    {
        $sql = "update utilisateur set nom = :nom, prenom = :prenom, datenaissance = :datenaissance, sexe = :sexe where email = :email";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':nom', $client->getNom());
            $req->bindValue(':prenom', $client->getPrenom());
            $req->bindValue(':email', $client->getEmail());
            $req->bindValue(':datenaissance', $client->getDateNaissance());
            $req->bindValue(':sexe', $client->getSexe());


            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

        $sql = "update client set telephone = :tel where login = :login";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':login', $client->getEmail());
            $req->bindValue(':tel', $client->getTel());

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function modifierClient_a($client)
    {
        $sql = "update utilisateur set nom = :nom, prenom = :prenom where email = :email";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':nom', $client->getNom());
            $req->bindValue(':prenom', $client->getPrenom());
            $req->bindValue(':email', $client->getEmail());


            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

        $sql = "update client set telephone = :tel, codepostal = :code, region = :region, adresselivraison = :addlivr, adresselivraison_2 = :addlivr_2 where login = :login";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':login', $client->getEmail());
            $req->bindValue(':tel', $client->getTel());
            $req->bindValue(':code', $client->getCodePostal());
            $req->bindValue(':region', $client->getRegion());
            $req->bindValue(':addlivr', $client->getAddLivr());
            $req->bindValue(':addlivr_2', $client->getAddLivr_2());

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
}
