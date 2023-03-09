<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$db = "prova_rubrica";

// Connetti al database
$connessione = mysqli_connect($host, $username, $password, $db);

// Verifica la connessione
if (!$connessione) {
  die("Connessione al database fallita: " . mysqli_connect_error());
}

// Recupera l'id del cliente da eliminare dalla query string dell'url
$id_cliente = $_GET["id"];

// Elimina il cliente dal database
$sql = "DELETE FROM clienti WHERE id_cliente = $id_cliente";
if (mysqli_query($connessione, $sql)) {
  echo "Cliente eliminato con successo";
  header('Location:index.php');
} else {
  echo "Errore durante l'eliminazione del cliente: " . mysqli_error($connessione);
}

// Chiudi la connessione al database
mysqli_close($connessione);
?>
