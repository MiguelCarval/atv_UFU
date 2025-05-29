<!--Atividade 36: Vetores -->
<?php

echo "Digite 10 valores para o vetor: \n";

$V = [];


for($i = 0; $i < 10; $i++){
    $V[$i] = readline();
}

sort($V);

print_r($V);





?>