<!--Atividade 8: Vetores -->

<?php

echo "Digite 6 valores para o vetor: \n";


$V = [0];


for($i = 0; $i <6; $i++){

    $V[$i] = readline();

}

echo "Vetor: \n";
print_r($V) . "\n";


echo "valores invertidos: \n";
for($i = 5; $i >= 0; $i--){

   echo $V[$i]. "\n";
}



?>