<!--Atividade 15: Vetores -->


<?php

echo "Digite 20 valores para o vetor:\n";
$V = [];

for($i = 0; $i <20; $i++){

    
    $V[$i] = (int)readline("Digite o valor $i: ");


 }

$V = array_unique($V);

$V = array_values($V);


print_r($V)



?>