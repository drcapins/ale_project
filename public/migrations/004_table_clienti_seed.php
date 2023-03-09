<?php
require_once "../bootstrap.php";

$connessione = db_connection($db_host, $db_username, $db_password, $db_name);

$sql = "INSERT INTO CLIENTI (cli_cognome, cli_nome, cli_indirizzo, cli_citta, cli_cap, cli_paese, cli_email,cli_email_ufficio,cli_pec, cli_telefono, cli_cellulare, cli_tel_ufficio, cli_cell_ufficio,cli_note)
        VALUES
        ('Rossi', 'Mario', 'Via Roma 1', 'Milano', '20121', 'Italia', 'mario.rossi@gmail.com','Mario.Rossi@azienda.com','Mario.Rossi@pec.azienda.com', '02 1234567', '345 6789012', '02 0765865','398 3429029','il cliente è nuovo'),
        ('Bianchi', 'Paolo', 'Via Dante 15', 'Roma', '00185', 'Italia', 'paolo.bianchi@yahoo.com','Paolo.Bianchi@azienda.com','Paolo.Bianchi@pec.azienda.com' ,'06 9876543', '333 4567890','06 8873455','345 6382987', 'il cliente ha un buono'),
        ('Verdi', 'Laura', 'Corso Magenta 8', 'Milano', '20123', 'Italia', 'laura.verdi@hotmail.com','Laura.Verdi@azienda.com','Laura.Verdi@pec.azienda.com', '02 5555555', '333 1234567','02 3456935','333 4596388', 'il cliente ha gia pagato')";

try {
    mysqli_query($connessione, $sql);
    echo "Dati inseriti correttamente nella tabella CLIENTI";
} catch (Exception $e) {
    die("Errore nell'inserimento dei dati: " . $e->getMessage());
};

// chiudere la connessione al database
mysqli_close($connessione);
