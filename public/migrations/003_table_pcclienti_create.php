<?php
require_once "../bootstrap.php";

$connessione = db_connection($db_host, $db_username, $db_password, $db_name);


// definire la query SQL per creare la tabella PCCLIENTI
$sql = "CREATE TABLE PCCLIENTI (
id_pccliente INT(11) NOT NULL AUTO_INCREMENT,
idcliente INT(11) NOT NULL,
pc_marca VARCHAR(70) NOT NULL,
pc_modello VARCHAR(100) NOT NULL,
pc_data_aq DATE NOT NULL,
pc_data_fine_garanzia DATE NOT NULL,
pc_note VARCHAR(200) NOT NULL,
PRIMARY KEY (id_pccliente),
FOREIGN KEY (idcliente) REFERENCES CLIENTI(id_cliente)
)";

try {
  mysqli_query($connessione, $sql);
  echo "La tabella PCCLIENTI è stata creata con successo";
} catch (Exception $e) {
  die("Errore nella creazione della tabella PCCLIENTI: " . $e->getMessage());
};

// chiudere la connessione al database
mysqli_close($connessione);
