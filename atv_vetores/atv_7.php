<!--Atividade 7: Vetores -->

<?php

echo "Digite os 10 valores do vetor: \n";

$V = [];
for($i = 0; $i <10; $i++){

    $V[$i] = readline();

}

echo "Vetor: ";
print_r($V);


$max_value = $V[0];
$max_index = 0;

for($i = 1; $i <count($V); $i++){
    if($V[$i] > $max_value){
        $max_value = $V[$i];
        $max_index = $i;
    }
}

echo "O maior valor do vetor: $max_value\n";
echo "O índice do valor: $max_index\n";





?>