<?PHP
session_start();
include "../../entities/comptes/client.php";
include "../../core/comptes/clientC.php";
    $client1C = new ClientC();
    $client1C->supprimerClient($_SESSION['email']);
    session_unset ();
    session_destroy ();
?>