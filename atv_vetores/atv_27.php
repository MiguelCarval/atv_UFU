<!--Atividade 27: Vetores -->

<?php

echo "Digite 10 valores para o vetor \n";

$V =[];


for($i = 0; $i < 10; $i++){

    $V[$i] = readline();

}

echo "Os valores primos são: \n";

for($i = 0; $i<count($V); $i++){
    $num = $V[$i];
    $divisores = 0;


    if($num < 2){
        continue;
    }


    for($j= 1; $j <=$num; $j++){
        if($num % $j == 0){
            $divisores++;
        }
    }

    if($divisores == 2){
        echo $num . " é primo na posição " . $i . "\n";
    }
}


?>