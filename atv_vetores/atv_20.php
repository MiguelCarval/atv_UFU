<!--Atividade 20: Vetores -->

<?php

echo "Digite 10 valores no intervalo de [0,50] \n";
$V = [];
$V_I =[];

for($i=0; $i < 10; $i++) { 
 while(true){
    $input= (int)readline();  
    if($input >= 0 && $input <= 50){
        $V[$i] = $input;
        break;
    }else{
        echo "Valor invalido digite valores ente [0,50] \n";
    }
  
}

}

$j = 0;
for($i = 0 ; $i < count($V); $i++){
  if($V[$i] % 2 !== 0){
    $V_I[$j] = $V[$i];
    $j++;
  }
  
}

function imprimirVetores($vetor, $titulo){
    echo "\n $titulo \n";
    for($i = 0; $i <count($vetor);$i++){
        echo str_pad($vetor[$i], 4, " ", STR_PAD_RIGHT);
        if(($i + 1) % 2 == 0){
            echo "\n";
        }
    }

echo "\n";
}

imprimirVetores($V, "Vetor normal");
imprimirVetores($V_I, "Valores ímpares");

?>