<?php
require_once "../bootstrap.php";

$connessione = db_connection($db_host, $db_username, $db_password, $db_name);

// definire la query SQL per creare la tabella CLIENTI
$sql = "CREATE TABLE IF NOT EXISTS CLIENTI (
id_cliente INT(11) NOT NULL AUTO_INCREMENT,
cli_cognome VARCHAR(100) NOT NULL,
cli_nome VARCHAR(70) NOT NULL,
cli_indirizzo VARCHAR(100) NOT NULL,
cli_citta VARCHAR(50) NOT NULL,
cli_cap VARCHAR(10) NOT NULL,
cli_paese VARCHAR(50) NOT NULL,
cli_email VARCHAR(50) NOT NULL,
cli_email_ufficio VARCHAR(50) NOT NULL,
cli_pec VARCHAR(50) NOT NULL,
cli_telefono VARCHAR(50) NOT NULL,
cli_cellulare VARCHAR(50) NOT NULL,
cli_tel_ufficio VARCHAR(50) NOT NULL,
cli_cell_ufficio VARCHAR(50) NOT NULL,
cli_note VARCHAR(200) NOT NULL,
PRIMARY KEY (id_cliente)
)";


try {
  mysqli_query($connessione, $sql);
  echo "La tabella CLIENTI è stata creata con successo";
} catch (Exception $e) {
  die("Errore nella creazione della tabella CLIENTI: " . $e->getMessage());
};

// chiudere la connessione al database
mysqli_close($connessione);
