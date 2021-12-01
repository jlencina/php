<?php

session_id('o577hp5g72cfidrvllsmdshdaf');

require_once('config.php');

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>