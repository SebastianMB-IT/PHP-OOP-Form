<?php
# definition of the constants for authentication to the DBMS
define('DATA_HOST', 'localhost');
define('DATA_UTENTE', 'root');
define('DATA_PASS', '');
define('DATA_DB', 'registrazione');
# class for the interaction with the database
class DATA_Class {
  # manufacturer defined
  function __construct() {
    # DBMS connection
    $connessione = @mysql_connect(DATA_HOST, DATA_UTENTE, DATA_PASS) or die('Errore nella connessione: ' . mysql_error());
    # database selection
    @mysql_select_db(DATA_DB, $connessione) or die('Errore dal database: ' . mysql_error());
  }
}
?>
