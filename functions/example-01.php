<?php

function ola(){
    return "Olá Mundo!<br>";
}

//Sem echo na função, ela não é exibida na tela
echo ola();
$frase = ola();

echo strlen($frase);
?>

