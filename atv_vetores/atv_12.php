<!--Atividade 12: Vetores -->

<?php


echo " Digite 5 valores: \n";

$V = [];
$media = 0;
$soma = 0;

for($i = 0; $i < 5; $i++){

    $V[$i] = (int)readline();
}

echo "Os valores lidos foram: \n";
print_r($V) ;


$maior = max($V);
echo "O maior valor: $maior  \n";

$menor = min($V);
echo "O menor valor: $menor \n";


for($i = 0; $i <count($V); $i++){

    $soma += $V[$i];
    $media = $soma / count($V);
}


echo "A media geral dos valores é: $media "

?>