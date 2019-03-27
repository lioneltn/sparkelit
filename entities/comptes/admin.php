<?PHP
include "utilisateur.php";
class Admin extends Utilisateur
{
    private $type;
    function __construct($nom, $prenom, $dateNaissance, $motdepasse, $email, $sexe, $type)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->email = $email;
        $this->sexe = $sexe;
        $this->motdepasse = $motdepasse;
        $this->type = $type;
    }

    function getType()
    {
        return $this->type;
    }

    function setType($type)
    {
        $this->type = $type;
    }
}
 