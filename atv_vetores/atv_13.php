<!--Atividade 13: Vetores -->


<?php

echo "Digite 5 valores: \n";

$V =[];
$indexMax = 0;
$indexMin = 0;


for($i = 0; $i < 5; $i++){

    $V[$i] = (int)readline();
}


for($i = 1; $i < count($V); $i++){
    
    $maior = $V[0];
    if($V[$i] > $maior ){
        $maior = $V[$i];
        $indexMax = $i;
     }else{
       $indexMin = $i;   
     }

}


echo "O maior valor esta no índice:  $indexMax \n";
echo "O menor valor esta no índice:  $indexMin \n";



?>