<!--Atividade 24: Vetores --> 

<?php

$V = [];
$numeros = 0;

while(count($V) < 100){

if($numeros % 7 != 0 && substr((string)$numeros, -1) != 7){
    $V[] = $numeros;
}
$numeros++;
}

print_r($V);
?>