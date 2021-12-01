<?php

function soma(float ...$valores){
    return array_sum($valores);
}


echo soma(2, 2);
echo "<br>";
echo soma(3487943, 48493);
echo "<br>";
echo soma(38373.32, 378984.342)

?>