<?PHP
include "utilisateur.php";
class Client extends Utilisateur
{
    private $tel;
    private $codePostal;
    private $addLivr;
    private $addLivr_2;
    function __construct($nom, $prenom, $dateNaissance, $motdepasse, $email, $sexe, $tel, $code, $addlivr, $addlivr_2)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->email = $email;
        $this->sexe = $sexe;
        $this->motdepasse = $motdepasse;
        $this->tel = $tel;
        $this->codePostal = $code;
        $this->addLivr = $addlivr;
        $this->addLivr_2 = $addlivr_2;
    }

    function getTel()
    {
        return $this->tel;
    }

    function getCodePostal()
    {
        return $this->codePostal;
    }

    function getAddLivr()
    {
        return $this->addLivr;
    }

    function getAddLivr_2()
    {
        return $this->addLivr_2;
    }

    function setTel($tel)
    {
        $this->tel = $tel;
    }

    function setCodePostal($code)
    {
        $this->codePostal = $code;
    }

    function setAddLivr($addlivr)
    {
        $this->addLivr = $addlivr;
    }

    function setAddLivr_2($addlivr_2)
    {
        $this->addLivr_2 = $addlivr_2;
    }
}
 