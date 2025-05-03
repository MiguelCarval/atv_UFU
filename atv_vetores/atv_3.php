<!--Atividade 3: Vetores -->

<?php

$V1 = [];
$V2 = [];
echo "Digite 10 números reais(float): \n";

for($i = 0; $i <= 10; $i++){

$V1[$i] = (float)readline();

echo "\nVetor Original: ";
print_r($V1);

}

for($i = 0; $i <= 10;$i++){

echo "\n Vetor ao quadrado: ";
    $V2[$i] = $V1[$i]**2;
    print_r($V2);
}








?>