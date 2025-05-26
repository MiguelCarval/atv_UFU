<!--Atividade 33: Vetores -->
<?php

$V = [];

echo "Digite 15 valores para o vetor \n";

for($i = 0; $i < 15; $i++){

    $V[$i] = (int)readline();
}

$vetor = array_filter($V, fn($v) =>$v != 0);

$compactado = array_values($vetor);

print_r($compactado);

?>