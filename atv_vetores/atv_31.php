 <!--Atividade 31: Vetores -->
<?php

$V1 = [];
$V2 = [];
$V3 = [];

echo "Digite os valores do vetor 1: \n";

for($i = 0; $i < 10; $i++){

    $V1[$i] = (int)readline();
}

echo "Digite os valores do vetor 2: \n";

for($i = 0; $i < 10; $i++){

    $V2[$i] = (int)readline();
}


$V3 = array_values(array_unique(array_merge($V1,$V2)));


echo "Vetor de união";
print_r($V3);

?>