<!-- IN QUESTO FILE SALVI TUTTE LE FUNZIONI CHE TI SERVIRANNO PER GESTIRE IL DATABASE
-->

<?php

//FUNZIONE DI CONNESSIONE AL SERVE MYSQL (SENZA DB NAME)
function mysql_connection(string $db_host, string $db_username, string $db_password)
{
    try {
        return mysqli_connect($db_host, $db_username, $db_password);
    } catch (Exception $e) {
        die("Connessione al database fallita: " . $e->getMessage());
    }
}

//FUNZIONE DI CONNESSIONE AL DATABASE
function db_connection(string $db_host, string $db_username, string $db_password, string $db_name)
{
    try {
        return mysqli_connect($db_host, $db_username, $db_password, $db_name);
    } catch (Exception $e) {
        die("Connessione al database fallita: " . $e->getMessage());
    }
}


?>