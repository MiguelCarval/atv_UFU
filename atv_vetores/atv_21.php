<!--Atividade 21: Vetores --> 

<?php

echo "Digite 10 valores do vetor A \n";
$A = [];
$B = [];
$C = [];

for($i = 0; $i<5; $i++){
$A[$i] = (int)readline();

}

echo "Digite 10 valores do vetor B \n";


for($i = 0; $i< 5; $i++){
    $B[$i] = (int)readline();
}



for($i = 0; $i <count($A); $i++){
    for($i = 0; $i <count($B); $i++){
     $C[$i] = $A[$i] - $B[$i];   
    }
}
echo "Os valores do vetor C:\n ";
print_r($C)


?>