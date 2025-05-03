<!--Atividade 19: Vetores -->

<?php

$V = [];
$valor = 0;

for($i = 0; $i< 50; $i++){
    $valor = (6 * $i) % ( $i + 1);
    $V[$i] = $valor;

}

foreach($V as $indice => $valores){
    echo "Vetor: $indice = $valores \n";

}
?>