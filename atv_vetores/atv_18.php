<!--Atividade 18: Vetores -->


<?php

echo "Digite 10 valores para o vetor \n";
$V =[];
$x = 0;

for($i = 0; $i <10; $i++){

    $V[$i] = (int)readline();
}

$x = (int)readline("Digite o valor de x");

echo "Múltiplos de $x no vetor:\n";

for($i= 0; $i < count($V); $i++){
    if($x != 0 && $V[$i] % $x == 0){
        echo $V[$i] . "\n";
    }
}







?>
