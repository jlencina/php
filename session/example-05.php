<?php

require_once('config.php');

echo session_save_path();

echo "<br>";

var_dump(session_status());

switch(session_status()){
    case PHP_SESSION_DISABLED:
        echo "Sessões desabilitadas.";
        echo "<br>";
        break;
    case PHP_SESSION_NONE:
        echo "Sessões habilitadas, porém nenhuma existe no momento.";
        echo "<br>";
        break;
    case PHP_SESSION_ACTIVE:
        echo "Sessões habilitadas e ao menos uma está ativa.";
        echo "<br>";
        break;
}

?>