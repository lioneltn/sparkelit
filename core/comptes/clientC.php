<?PHP
include "../../config4.php";

class ClientC
{
    function ajouterClient($client)
    {
        $sql = "insert into utilisateur values (:nom, :prenom, :email, :datenaissance, :motdepasse, :sexe, :code)";
        $db = config4::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':nom', $client->getNom());
            $req->bindValue(':prenom', $client->getPrenom());
            $req->bindValue(':email', $client->getEmail());
            $req->bindValue(':datenaissance', $client->getDateNaissance());
            $req->bindValue(':motdepasse', $client->getMotdepasse());
            $req->bindValue(':sexe', $client->getSexe());
            $req->bindValue(':code', "");

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

        $sql = "insert into client (login) values (:login)";
        $db = config4::getConnexion();
        try {
            $req = $db->prepare($sql);

            $login = $client->getEmail();

            $req->bindValue(':login', $login);
            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

        $sql="insert into adressetotal(adresse,ville,pays,codePostal,tel,region,email,id,companie) values (:adresse,:ville,:pays,:codePostal,:tel,:region,:email,NULL,:companie)";
		$db = config4::getConnexion();
		try
		{
            $addlivr = $client->getAddLivr();
        $addLivr_2 = $client->getAddLivr_2();
        $req=$db->prepare($sql);
		$req->bindValue(':adresse',$addlivr." ".$addLivr_2);
        $req->bindValue(':ville',"");
        $req->bindValue(':pays',"");
        $req->bindValue(':companie',"");
		$req->bindValue(':codePostal',$client->getCodePostal());
		$req->bindValue(':tel',$client->getTel());
		$req->bindValue(':region',$client->getRegion());
		$req->bindValue(':email',$client->getEmail());
            $req->execute();
           
        }
        catch (Exception $e)
        {
            echo 'Erreur: '.$e->getMessage();
        }

    }

    function recupererClient($login)
    {
        //$sql = "SELECT * from utilisateur where email = :email";
        $sql = "select u.nom, u.prenom, u.sexe, u.datenaissance, u.motdepasse, u.email, c.email, c.tel, c.codePostal, c.region, c.adresse from utilisateur u inner join adressetotal c on u.email = c.email where u.email=:email";
        $db = config4::getConnexion();
        try {
            $client1 = $db->prepare($sql);

            $client1->bindValue(':email', $login);
            $client1->execute();
            $liste=$client1->fetchall();
            echo "test";
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function modifierClient($client)
    {
        $verif = "select motdepasse from utilisateur where email = :email";
        $db = config4::getConnexion();
        try {
            $req = $db->prepare($verif);

            $req->bindValue(':email', $client->getEmail());

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

        $sql = "update utilisateur set nom = :nom, prenom = :prenom, datenaissance = :datenaissance, sexe = :sexe where email = :email";
        $db = config4::getConnexion();
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

        $sql = "update adressetotal set tel = :tel, codePostal = :code, adresse = :addlivr where email = :login";
        $db = config4::getConnexion();
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
        $db = config4::getConnexion();
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

        $sql = "update adressetotal set tel = :tel where email = :login";
        $db = config4::getConnexion();
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
        $db = config4::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':nom', $client->getNom());
            $req->bindValue(':prenom', $client->getPrenom());
            $req->bindValue(':email', $client->getEmail());

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }

        $sql = "update adressetotal set tel = :tel, codePostal = :code, region = :region, adresse = :addlivr where email = :login";
        $db = config4::getConnexion();
        try {
            $req = $db->prepare($sql);

            $req->bindValue(':login', $client->getEmail());
            $req->bindValue(':tel', $client->getTel());
            $req->bindValue(':code', $client->getCodePostal());
            $req->bindValue(':region', $client->getRegion());
            $req->bindValue(':addlivr', $client->getAddLivr()." ".$client->getAddLivr_2());

            $req->execute();
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function supprimerClient($login) {
        $sql="DELETE FROM client where login= :login";
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
            header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

        $sql="DELETE FROM adressetotal where email= :login";
		$db = config4::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':login',$login);
		try{
            $req->execute();
            header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    
}
