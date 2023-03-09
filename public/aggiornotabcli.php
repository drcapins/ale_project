<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "prova_rubrica";

$connessione= mysqli_connect($host, $username, $password, $dbname);

if (!$connessione) {
    die("Connessione al database fallita: " . mysqli_connect_error());
} 


$update_sql = "UPDATE CLIENTI SET 
                    cli_email_ufficio = CONCAT(cli_nome, '.', cli_cognome, '@azienda.com'), 
                    cli_pec = CONCAT(cli_nome, '.', cli_cognome, '@pec.azienda.com')";
                    
if (mysqli_query($connessione, $update_sql)) {
    echo "Dati aggiornati correttamente nella tabella CLIENTI";
} else {
    echo "Errore nell'aggiornamento dei dati: " . mysqli_error($connessione);
}

mysqli_close($connessione);
?>
