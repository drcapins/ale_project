<?php
require_once "../bootstrap.php";

$connessione = db_connection($db_host, $db_username, $db_password, $db_name);
// definire la query SQL per inserire i dati nella tabella PCCLIENTI
$sql = "INSERT INTO PCCLIENTI (idcliente, pc_marca, pc_modello, pc_data_aq, pc_data_fine_garanzia, pc_note)
VALUES (1, 'Dell', 'Inspiron 15', '2022-02-01', '2024-02-01', 'Nessuna nota'),
       (2, 'Lenovo', 'ThinkPad T14', '2021-12-15', '2023-12-15', 'Batteria da sostituire'),
       (3, 'HP', 'Envy x360', '2022-01-10', '2024-01-10', 'Schermo rotto')";

// eseguire la query SQL per inserire i dati nella tabella PCCLIENTI
try {
  mysqli_query($connessione, $sql);
  echo "Dati inseriti correttamente nella tabella PCCLIENTI";
} catch (Exception $e) {
  die("Errore nell'inserimento dei dati: " . $e->getMessage());
};

// chiudere la connessione al database
mysqli_close($connessione);
