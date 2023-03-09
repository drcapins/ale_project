<?php
// Esempio di codice PHP per salvare i dati di un nuovo cliente nel database

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

// Prendi i dati inviati dal form
$cli_cognome = $_POST["cli_cognome"];
$cli_nome = $_POST["cli_nome"];
$cli_indirizzo = $_POST["cli_indirizzo"];
$cli_citta = $_POST["cli_citta"];
$cli_cap = $_POST["cli_cap"];
$cli_paese = $_POST["cli_paese"];
$cli_email = $_POST["cli_email"];
$cli_email_ufficio=$_POST["cli_email_ufficio"];
$cli_pec = $_POST["cli_pec"];
$cli_telefono = $_POST["cli_telefono"];
$cli_cellulare= $_POST["cli_cellulare"];
$cli_tel_ufficio = $_POST["cli_tel_ufficio"];
$cli_cell_ufficio = $_POST["cli_cell_ufficio"];
$cli_note = $_POST["cli_note"];

// Costruisci la query SQL per inserire i dati nel database
$sql = "INSERT INTO clienti (cli_cognome, cli_nome, cli_indirizzo, cli_citta, cli_cap, cli_paese, cli_email, cli_email_ufficio, cli_pec, cli_telefono, cli_cellulare, cli_tel_ufficio, cli_cell_ufficio, cli_note) 
        VALUES ('$cli_cognome', '$cli_nome', '$cli_indirizzo', '$cli_citta', '$cli_cap', '$cli_paese', '$cli_email', '$cli_email_ufficio', '$cli_pec', '$cli_telefono', '$cli_cellulare', '$cli_tel_ufficio', '$cli_cell_ufficio', '$cli_note')";

// Esegui la query e verifica se l'operazione è andata a buon fine
if (mysqli_query($connessione, $sql)) {
  echo "Nuovo cliente inserito con successo!";
  header('Location:index.php');
} else {
  echo "Errore durante l'inserimento del nuovo cliente: " . mysqli_error($connessione);
}

?>
