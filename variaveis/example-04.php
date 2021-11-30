<?php

$nome = (int)$_GET["a"];
$sobrenome = (int)$_GET["b"];

var_dump($nome);
var_dump($sobrenome);

//Pega o IP que está acessando a url atual
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

//


$ip_2 = $_SERVER["SCRIPT_NAME"];

echo "<br/>";
echo $ip_2;

?>