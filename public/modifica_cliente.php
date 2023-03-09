<?php
// Connessione al database
$host = "127.0.0.1";
$username = "root";
$password = "";
$db = "prova_rubrica";
$connessione = mysqli_connect($host, $username, $password, $db);

// Verifica la connessione
if (!$connessione) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

// Verifica se l'id del cliente è stato passato come parametro
if (isset($_GET['id'])) {
    $id_cliente = $_GET['id'];

}
    // Verifica se il form di modifica è stato inviato
    if (isset($_POST['submit'])) {
        // Recupera i nuovi dati dal form
        $cli_cognome = $_POST['cli_cognome'];
        $cli_nome = $_POST['cli_nome'];
        $cli_indirizzo = $_POST['cli_indirizzo'];
        $cli_citta = $_POST['cli_citta'];
        $cli_cap = $_POST['cli_cap'];
        $cli_paese = $_POST['cli_paese'];
        $cli_email = $_POST['cli_email'];
        $cli_email_ufficio = $_POST['cli_email_ufficio'];
        $cli_pec = $_POST['cli_pec'];
        $cli_telefono = $_POST['cli_telefono'];
        $cli_cellulare = $_POST['cli_cellulare'];
        $cli_tel_ufficio = $_POST['cli_tel_ufficio'];
        $cli_cell_ufficio = $_POST['cli_cell_ufficio'];
        $cli_note = $_POST['cli_note'];
    

        // Esegui la query di aggiornamento dei dati del cliente
        $sql = "UPDATE clienti SET cli_cognome='$cli_cognome', cli_nome='$cli_nome', cli_indirizzo='$cli_indirizzo', cli_citta='$cli_citta', cli_cap='$cli_cap', cli_paese='$cli_paese', cli_email='$cli_email', cli_email_ufficio='$cli_email_ufficio', cli_pec='$cli_pec', cli_telefono='$cli_telefono', cli_cellulare='$cli_cellulare', cli_tel_ufficio='$cli_tel_ufficio', cli_cell_ufficio='$cli_cell_ufficio', cli_note='$cli_note' WHERE id_cliente=$id_cliente";
        if (mysqli_query($connessione, $sql)) {
            echo "Dati del cliente aggiornati con successo";
        } else {
            echo "Errore durante l'aggiornamento dei dati del cliente: " . mysqli_error($connessione);
        }
        if (mysqli_query($connessione, $sql)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Errore durante l'aggiornamento dei dati del cliente: " . mysqli_error($connessione);
        }
        
    }

    // Esegui la query per recuperare i dati del cliente dal database
    $sql = "SELECT * FROM clienti WHERE id_cliente=$id_cliente";
    $result = mysqli_query($connessione, $sql);

    // Visualizza il form di modifica dei dati del cliente
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
    }
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Modifica cliente</title>
        </head>
        <body>
        <h1>Modifica dati cliente</h1>
        <form method="post">
            
        <label>Cognome:</label>
        <input type="text" name="cli_cognome" value="<?php echo $row['cli_cognome']; ?>"><br>
        <label>Nome:</label>
        <input type="text" name="cli_nome" value="<?php echo $row['cli_nome']; ?>"><br>
        <label>Indirizzo:</label>
        <input type="text" name="cli_indirizzo" value="<?php echo $row['cli_indirizzo']; ?>"><br>
        <label>Città:</label>
        <input type="text" name="cli_citta" value="<?php echo $row['cli_citta']; ?>"><br>
        <label>CAP:</label>
        <input type="text" name="cli_cap" value="<?php echo $row['cli_cap']; ?>"><br>
        <label>Paese:</label>
        <input type="text" name="cli_paese" value="<?php echo $row['cli_paese']; ?>"><br>
        <label>Email:</label>
        <input type="text" name="cli_email" value="<?php echo $row['cli_email']; ?>"><br>
        <label>Email ufficio:</label>
        <input type="text" name="cli_email_ufficio" value="<?php echo $row['cli_email_ufficio']; ?>"><br>
        <label>PEC:</label>
        <input type="text" name="cli_pec" value="<?php echo $row['cli_pec']; ?>"><br>
        <label>Telefono:</label>
        <input type="text" name="cli_telefono" value="<?php echo $row['cli_telefono']; ?>"><br>
        <label>Cellulare:</label>
        <input type="text" name="cli_cellulare" value="<?php echo $row['cli_cellulare']; ?>"><br>
        <label>Telefono ufficio:</label>
        <input type="text" name="cli_tel_ufficio" value="<?php echo $row['cli_tel_ufficio']; ?>"><br>
        <label>Cellulare ufficio:</label>
        <input type="text" name="cli_cell_ufficio" value="<?php echo $row['cli_cell_ufficio']; ?>"><br>
        <label>Note:</label>
        <textarea name="cli_note"><?php echo $row['cli_note']; ?></textarea><br>
        <input type="submit" name="submit" value="Aggiorna dati">
    </form>
</body>
</html>

       

