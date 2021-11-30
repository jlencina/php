<?php

$anoNascimento = 1994;

//$nomeCompleto = "";

$nome1 = "Juan"; //OK!

$sobrenome = "Maluco";

$nomeCompleto = $nome1 ." " . $sobrenome;

echo $nomeCompleto;

echo "<br/>";

exit;
//$%nome = "Juan" //Erro

//Comentário de uma linha
/* Comentário de várias linhas
Mesmo
Mesmo */

echo $nome1;

echo "<br/>";

unset($nome1);

if(isset($nome1)){
    echo $nome1;
}else{
    echo $nome1 = "Gerson";
}


?>