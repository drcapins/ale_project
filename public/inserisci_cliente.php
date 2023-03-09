<!DOCTYPE html>
<html>
<head>
	<title>Inserisci nuovo cliente</title>
</head>
<body>
	<h1>Inserisci nuovo cliente</h1>
	<form method="post" action="salva_cliente.php">
		<label>Cognome:</label>
		<input type="text" name="cli_cognome"><br>
		<label>Nome:</label>
		<input type="text" name="cli_nome"><br>
		<label>Indirizzo:</label>
		<input type="text" name="cli_indirizzo"><br>
		<label>Città:</label>
		<input type="text" name="cli_citta"><br>
		<label>CAP:</label>
		<input type="text" name="cli_cap"><br>
		<label>Paese:</label>
		<input type="text" name="cli_paese"><br>
		<label>Email:</label>
		<input type="text" name="cli_email"><br>
		<label>Email ufficio:</label>
		<input type="text" name="cli_email_ufficio"><br>
		<label>PEC:</label>
		<input type="text" name="cli_pec"><br>
		<label>Telefono:</label>
		<input type="text" name="cli_telefono"><br>
		<label>Cellulare:</label>
		<input type="text" name="cli_cellulare"><br>
		<label>Telefono ufficio:</label>
		<input type="text" name="cli_tel_ufficio"><br>
		<label>Cellulare ufficio:</label>
		<input type="text" name="cli_cell_ufficio"><br>
		<label>Note:</label>
		<textarea name="cli_note"></textarea><br>
		<input type="submit" value="Salva">
	</form>
</body>
</html>
