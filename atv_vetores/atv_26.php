<!--Atividade 26: Vetores -->

<?php

$V = [10,20,30,40,50,60,70,80,90,100];

$n = count($V);

$m = array_sum($V)/ $n;

$soma = 0;
for($i = 0; $i < $n; $i++){
$soma += ($V[$i] - $m) **2;

}


$desvioPadrao = sqrt($soma / ($n - 1));

echo "Media: $m \n";
echo "Desvio Padrão: $desvioPadrao"

?>