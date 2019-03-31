<?php
include "../../../../config.php";

//$connect = new PDO("mysql:host=localhost;dbname=5icha", "root", "");
$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
        $data = array(
            ':nom'   => "%" . $_GET['nom'] . "%",
            ':prenom'   => "%" . $_GET['prenom'] . "%",
            ':email'     => "%" . $_GET['email'] . "%",
            ':datenaissance'     => "%" . $_GET['datenaissance'] . "%",
            ':sexe'    => "%" . $_GET['sexe'] . "%",
            ':telephone'    => "%" . $_GET['telephone'] . "%",
            ':codepostal'    => "%" . $_GET['code'] . "%",
            ':region'    => "%" . $_GET['region'] . "%",
            ':adresselivraison'    => "%" . $_GET['adresselivraison'] . "%",
            ':adresselivraison_2'    => "%" . $_GET['adresselivraison_2'] . "%"
        );
        $query = "select u.nom, u.prenom, u.sexe, u.datenaissance, u.motdepasse, u.email, telephone, codepostal, region, adresselivraison, adresselivraison_2 from utilisateur u inner join client c on u.email = c.login WHERE u.nom LIKE :nom AND u.prenom LIKE :prenom AND u.email LIKE :email AND u.sexe LIKE :sexe AND u.datenaissance LIKE :datenaissance AND telephone LIKE :telephone AND codepostal LIKE :codepostal AND region LIKE :region AND adresselivraison LIKE :adresselivraison AND adresselivraison_2 LIKE :adresselivraison_2";
        //$query = "SELECT * FROM utilisateur WHERE nom LIKE :nom AND prenom LIKE :prenom AND email LIKE :email AND datenaissance LIKE :datenaissance ORDER BY email DESC";
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $result = $statement->fetchAll();
        foreach ($result as $row) {
                $output[] = array(
                    'email'    => $row['email'],
                    'nom'  => $row['nom'],
                    'prenom'   => $row['prenom'],
                    'datenaissance'    => $row['datenaissance'],
                    'sexe'   => $row['sexe'],
                    'telephone'   => $row['telephone'],
                    'codepostal'   => $row['codepostal'],
                    'region'   => $row['region'],
                    'adresselivraison'   => $row['adresselivraison'],
                    'adresselivraison_2'   => $row['adresselivraison_2']
                );
            }
        header("Content-Type: application/json");
        echo json_encode($output);
    }

if ($method == "POST") {
        $data = array(
            'email'    => $_POST['email'],
            'nom'  => $_POST['nom'],
            'prenom'   => $_POST['prenom'],
            'datenaissance'    => $_POST['datenaissance'],
            'sexe'   => $_POST['sexe'],
            'telephone'   => $_POST['telephone'],
            'codepostal'   => $_POST['codepostal'],
            'region'   => $_POST['region'],
            'adresselivraison'   => $_POST['adresselivraison'],
            'adresselivraison_2'   => $_POST['adresselivraison_2']
        );

        $query = "INSERT INTO utilisateur (email, nom, prenom, datenaissance, sexe) VALUES (:email, :nom, :prenom, :datenaissance, :sexe)";
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $query = "INSERT INTO client (login, telephone, codepostal, region, adresselivraison, adresselivraison_2 ) VALUES (:email, :telephone, :codepostal, :datenaissance, :region, :adresselivraison, :adresselivraison_2 )";
        $statement = $connect->prepare($query);
        $statement->execute($data);
    }

if ($method == 'PUT') {
        parse_str(file_get_contents("php://input"), $_PUT);
        $data = array(
            ':email'   => $_PUT['email'],
            ':nom' => $_PUT['nom'],
            ':prenom' => $_PUT['prenom'],
            ':datenaissance'   => $_PUT['datenaissance'],
            ':sexe'  => $_PUT['sexe'],
            'telephone'   => $_PUT['telephone'],
            'codepostal'   => $_PUT['codepostal'],
            'region'   => $_PUT['region'],
            'adresselivraison'   => $_PUT['adresselivraison'],
            'adresselivraison_2'   => $_PUT['adresselivraison_2']
        );
        $query = "UPDATE utilisateur SET nom = :nom, prenom = :prenom, datenaissance = :datenaissance, sexe = :sexe WHERE email = :email";
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $query = "UPDATE client SET region = :region, codepostal = :codepostal, adresselivraison = :adresselivraison, adresselivraison_2 = :adresselivraison_2, telephone = :telephone WHERE email = :email";
        $statement = $connect->prepare($query);
        $statement->execute($data);
    }

if ($method == "DELETE") {
        parse_str(file_get_contents("php://input"), $_DELETE);
        $query = "DELETE FROM client WHERE login = '" . $_DELETE["email"] . "'";
        $statement = $connect->prepare($query);
        $statement->execute();
        $query = "DELETE FROM utilisateur WHERE email = '" . $_DELETE["email"] . "'";
        $statement = $connect->prepare($query);
        $statement->execute();
    }
 