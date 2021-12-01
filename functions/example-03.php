<?php

function ola($texto = "mundo", $periodo){
    return "Olá $texto! $periodo!<br>";
}


echo ola("mundo", "Bom dia");
echo ola("", "Boa noite");
echo ola("João", "Boa tarde");

?>