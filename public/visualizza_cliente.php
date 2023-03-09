<?php
// Informazioni di connessione al database
$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "prova_rubrica";

// Definire la funzione per visualizzare i dati del cliente
function visualizza_pc($host,$user,$password,$db,$id_cliente) {
  // Creare la connessione al database
  $connessione = mysqli_connect($host, $user, $password, $db);

  // Verificare la connessione
  if (!$connessione) {
    die("Connessione al database fallita: " . mysqli_connect_error());
  }

  // Definire la query SQL per selezionare i dati del cliente specificato dall'ID
  $sql = "SELECT * FROM PCCLIENTI WHERE idcliente = '$id_cliente'";

  // Eseguire la query SQL per selezionare i dati dalla tabella PCCLIENTI
  $result = mysqli_query($connessione, $sql);

  // Visualizzare i dati della tabella PCCLIENTI
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "idcliente: " . $row["idcliente"] . "<br>";
      echo "Marca: " . $row["pc_marca"] . "<br>";
      echo "Modello: " . $row["pc_modello"] . "<br>";
      echo "Data di acquisto: " . $row["pc_data_aq"] . "<br>";
      echo "Data di fine garanzia: " . $row["pc_data_fine_garanzia"] . "<br>";
      echo "Note: " . $row["pc_note"] . "<br><br>";
    }
  } else {
    echo "Nessun risultato trovato per l'ID cliente specificato";
  }

  // Chiudere la connessione al database
  mysqli_close($connessione);
}

// Verificare se il form è stato inviato
if (isset($_POST['submit'])) {
  // Verificare se l'ID del cliente è stato inserito
  if (!empty($_POST['id_cliente'])) {
    // Chiamare la funzione per visualizzare i dati del cliente specificato dall'ID
    $id_cliente = $_POST['id_cliente'];
    visualizza_pc($host,$user,$password,$db,$id_cliente);
  } else {
    echo "Inserire l'ID del cliente";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Visualizza PC Cliente</title>
</head>
<body>
	<h1>Visualizza PC Cliente</h1>
	<form method="post" action="">
		<label for="id_cliente">ID Cliente:</label>
		<input type="text" name="id_cliente" id="id_cliente"><br><br>
		<input type="submit" name="submit" value="Visualizza">
	</form>
	<br>
	<a href="index.php"><button>Torna alla pagina principale</button></a>
</body>
</html>



