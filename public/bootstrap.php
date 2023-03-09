<!-- IN QUESTO FILE SALVI INCLUDI TUTTI I FILE DI SERVIZIO NECESSARI ALLA TUA APPLICAZIONE, COSI NEI VARI SCRIPT DOVRAI INCLUDERE SOLO QUESTO ED AVRAI TUTTO DISPONIBILE
-->
<?php
// questa funzione ti aiuta a visualizzare tutti i tipi di errore
ini_set('display_errors', 1);
error_reporting(E_ALL);

function dump($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    exit;
}
// FINE PARTE PER LO SVILUPPO
?>
<?php

require_once "config/env.php";
require_once "config/db_functions.php";


?>