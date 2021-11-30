<?php

$resultado1 = (10 + 3) / 2 > 5 || 10 + 5 < 3;
$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 3;

//&& é equivalente ao and em Python
//|| é equivalente ou or em Python


var_dump($resultado1);

echo "<br>";

var_dump($resultado2);

?>