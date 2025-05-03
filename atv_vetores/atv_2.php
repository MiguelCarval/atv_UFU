<!--Atividade 2: Vetores -->

<?php

$numeros = array();

for($i=1;$i<=6;$i++){ 

    echo "Digite " . ($i ) . "º número:";

    $numeros[$i] = (int)readline();
}

echo "Os números digitados foram: " ;
print_r($numeros);


?>