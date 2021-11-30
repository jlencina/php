<?php

//Variáveis de escopo
$nome = "Juan ";

function test(){

    global $nome;
    echo $nome;
}

$nome2 = "Lencina";

function test2(){

    global $nome2;
    echo $nome2 ." agora no teste 2";
}

test();
test2();
?>