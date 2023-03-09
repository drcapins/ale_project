<!DOCTYPE html>
<html>

<head>
	<title>Rubrica Clienti</title>
</head>

<body>
	<h1>Rubrica clienti</h1>
	<table>
		<tr>
			<th>id_cliente</th>
			<th>cli_cognome</th>
			<th>cli_nome</th>
			<th>cli_indirizzo</th>
			<th>cli_città</th>
			<th>cli_cap</th>
			<th>cli_paese</th>
			<th>cli_email</th>
			<th>cli_email_ufficio</th>
			<th>cli_pec</th>
			<th>cli_telefono</th>
			<th>cli_cellulare</th>
			<th>cli_tel_ufficio</th>
			<th>cli_cell_ufficio</th>
			<th>cli_note</th>

		</tr>
		<?php

		require_once "./bootstrap.php";

		$connessione = db_connection($db_host, $db_username, $db_password, $db_name);

		// Seleziona tutti i dati dei clienti dalla tabella "clienti"
		$sql = "SELECT * FROM CLIENTI";
		$result = mysqli_query($connessione, $sql);

		// Visualizza i dati dei clienti nella tabella
		if (mysqli_num_rows($result) > 0) {
			// Output dei dati di ogni riga
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row["id_cliente"] . "</td>";
				echo "<td>" . $row["cli_cognome"] . "</td>";
				echo "<td>" . $row["cli_nome"] . "</td>";
				echo "<td>" . $row["cli_indirizzo"] . "</td>";
				echo "<td>" . $row["cli_citta"] . "</td>";
				echo "<td>" . $row["cli_cap"] . "</td>";
				echo "<td>" . $row["cli_paese"] . "</td>";
				echo "<td>" . $row["cli_email"] . "</td>";
				echo "<td>" . $row["cli_email_ufficio"] . "</td>";
				echo "<td>" . $row["cli_pec"] . "</td>";
				echo "<td>" . $row["cli_telefono"] . "</td>";
				echo "<td>" . $row["cli_cellulare"] . "</td>";
				echo "<td>" . $row["cli_tel_ufficio"] . "</td>";
				echo "<td>" . $row["cli_cell_ufficio"] . "</td>";
				echo "<td>" . $row["cli_note"] . "</td>";
				echo "<td><a href='modifica_cliente.php?id=" . $row["id_cliente"] . "'>Modifica</a> | <a href='elimina_cliente.php?id=" . $row["id_cliente"] . "'>Elimina</a> </td>";
				echo "</tr>";
			}
		} else {
			echo "0 risultati";
		}
		// Chiudi la connessione al database
		mysqli_close($connessione);

		?>
	</table>
	<a href="inserisci_cliente.php">Inserisci nuovo cliente</a>
	<a href="visualizza_cliente.php">Visualizza Pc</a>
</body>

</html>