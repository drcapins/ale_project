<?php

require_once "../bootstrap.php";

$connessione = mysql_connection($db_host, $db_username, $db_password);
// creare il database
$sql = "CREATE DATABASE IF NOT EXISTS prova_rubrica;";

try {
  mysqli_query($connessione, $sql);
  echo "Database creato con successo o già esistente";
} catch (Exception $e) {
  die("Errore nella creazione del database: " . $e->getMessage());
};


// chiudere la connessione
mysqli_close($connessione);
