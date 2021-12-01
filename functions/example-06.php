<?php

$pessoa = array(
    "nome"=>"João",
    "idade"=>20
);

//Passando valor por referência, é utlizado o & no parâmetro da função
foreach($pessoa as &$value){

    if(gettype($value) === 'integer') $value += 10;

    echo $value."<br>";
}

print_r($pessoa);

?>