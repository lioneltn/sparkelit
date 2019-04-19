
<?php

//fetch_data.php

$connect = new PDO("mysql:host=localhost;dbname=5icha", "root", "");

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
 $data = array(
  ':totalPaiement'   => "%" . $_GET['totalPaiement'] . "%",
  ':etat'   => "%" . $_GET['etat'] . "%",
  ':date'     => "%" . $_GET['date'] . "%",
  ':email'    => "%" . $_GET['email'] . "%"
 );
 $query = "SELECT * FROM commande WHERE totalPaiement LIKE :totalPaiement AND etat LIKE :etat AND date LIKE :date AND email LIKE :email ORDER BY idCommande DESC";

 $statement = $connect->prepare($query);
 $statement->execute($data);
 $result = $statement->fetchAll();
//print_r($result);
 foreach($result as $row)
 {
  $output[] = array(
   'idCommande'    => $row['idCommande'],   
   'totalPaiement'  => $row['totalPaiement'],
   'etat'   => $row['etat'],
   'date'    => $row['date'],
   'email'   => $row['email']
  );
//    print_r($output);
 }
 header("Content-Type: application/json");
 echo json_encode($output);
//    var_dump($output);
}

if($method == "POST")
{
 $data = array(
  ':totalPaiement'  => $_POST['totalPaiement'],
  ':etat'  => $_POST["etat"],
  ':date'    => $_POST["date"],
  ':email'   => $_POST["email"]
 );

 $query = "INSERT INTO commande (totalPaiement, etat, date, login) VALUES (:totalPaiement, :etat, :date, :login)";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == 'PUT')
{
 parse_str(file_get_contents("php://input"), $_PUT);
 $data = array(
  ':idCommande'   => $_PUT['idCommande'],
  ':totalPaiement' => $_PUT['totalPaiement'],
  ':etat' => $_PUT['etat'],
  ':date'   => $_PUT['date'],
  ':email'  => $_PUT['email']
 );
 $query = "
 UPDATE commande 
 SET totalPaiement = :totalPaiement, 
 etat = :etat, 
 date = :date, 
 email = :email 
 WHERE idCommande = :idCommande
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
}

if($method == "DELETE")
{
 parse_str(file_get_contents("php://input"), $_DELETE);
 $query = "DELETE FROM commande WHERE idCommande = '".$_DELETE["idCommande"]."'";
 $statement = $connect->prepare($query);
 $statement->execute();
}

?>
