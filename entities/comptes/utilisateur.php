<?php
class Utilisateur
{
    protected $nom;
    protected $prenom;
    protected $dateNaissance;
    protected $motdepasse;
    protected $email;
    protected $sexe;
    function __construct($nom, $prenom, $dateNaissance, $motdepasse, $email, $sexe)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->email = $email;
        $this->sexe = $sexe;
        $this->motdepasse = $motdepasse;
    }

    function getNom()
    {
        return $this->nom;
    }

    function getPrenom()
    {
        return $this->prenom;
    }

    function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getSexe()
    {
        return $this->sexe;
    }

    function getMotdepasse()
    {
        return $this->motdepasse;
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }

    function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;
    }
}
 