<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=5icha", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':nom'   => "%" . $_GET['nom'] . "%",
  ':prenom'   => "%" . $_GET['prenom'] . "%",
  ':email'     => "%" . $_GET['email'] . "%",
  ':datenaissance'     => "%" . $_GET['datenaissance'] . "%",
  ':dateAjout'     => "%" . $_GET['dateAjout'] . "%",
  ':sexe'    => "%" . $_GET['sexe'] . "%",
  ':tel'    => "%" . $_GET['tel'] . "%",
  ':codepostal'    => "%" . $_GET['codepostal'] . "%",
  ':region'    => "%" . $_GET['region'] . "%",
  ':adresselivraison'    => "%" . $_GET['adresselivraison'] . "%"
 );
 $query = "SELECT * FROM utilisateur u inner join client c on u.email = c.login WHERE nom LIKE :nom AND prenom LIKE :prenom AND email LIKE :email AND datenaissance LIKE :datenaissance AND sexe LIKE :sexe AND dateAjout LIKE :dateAjout AND tel LIKE :tel AND codepostal LIKE :codepostal AND region LIKE :region AND adresselivraison LIKE :adresselivraison ORDER BY email DESC";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output[] = array(
   'email'    => $row['email'],   
   'nom'  => $row['nom'],
   'prenom'   => $row['prenom'],
   'datenaissance'    => $row['datenaissance'],
   'dateAjout'    => $row['dateAjout'],
   'sexe'   => $row['sexe'],
   'tel'   => $row['tel'],
   'codepostal'   => $row['codepostal'],
   'region'   => $row['region'],
   'adresselivraison'   => $row['adresselivraison']
  );
 }
 header("Content-Type: application/json");
 echo json_encode($output);
}
/*
if ($method == "POST") {
        $data = array(
            ':email'  => $_POST['email'],
            ':nom'  => $_POST['nom'],
            ':prenom'  => $_POST["prenom"],
            ':datenaissance'    => $_POST["datenaissance"],
            ':sexe'   => $_POST["sexe"]
        );

        $query = "INSERT INTO utilisateur (email, nom, prenom, datenaissance, sexe) VALUES (:email, :nom, :prenom, :datenaissance, :sexe)";
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $query = "INSERT INTO admin (login, type) VALUES (:email, '2')";
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
            ':sexe'  => $_PUT['sexe']
        );
        $query = "UPDATE utilisateur SET nom = :nom, prenom = :prenom, datenaissance = :datenaissance, sexe = :sexe WHERE email = :email";
        $statement = $connect->prepare($query);
        $statement->execute($data);
    }
*/
if ($method == "DELETE") {
        parse_str(file_get_contents("php://input"), $_DELETE);
        $query = "DELETE FROM client WHERE login = '" . $_DELETE["email"] . "'";
        $statement = $connect->prepare($query);
        $statement->execute();
    }
 