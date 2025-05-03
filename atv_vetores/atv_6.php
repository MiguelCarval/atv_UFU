<!--Atividade 6: Vetores -->

<?php

$V = [];
echo "Digite os 10 valores do vetor: \n";


for($i = 0; $i < 10; $i++){

echo "valor $i :";
$V[$i]= (int)readline();

}
print_r($V);

$maior = max($V);
$menor = min($V);

echo " O maior valor do vetor é: ". $maior . "\n O menor valor do vetor é: " . $menor;

?>