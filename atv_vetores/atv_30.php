<?php

$V1 = [];
$V2 = [];
$V1_2 = [];


echo "Digite 10 valores para os vetores 1: \n";

for($i = 0; $i < 10; $i++){

    $V1[$i] = (int)readline();
}




echo "Digite 10 valores para os vetores 2: \n";
for($i = 0; $i < 10; $i++){

    $V2[$i] = (int)readline();
}


foreach($V1 as $valores){
    if(in_array($valores, $V2) && !in_array($valores, $V1_2)){
        $V1_2[] = $valores;
    }
}

echo "Elementos em comum sem repetição: \n";
print_r($V1_2);

?>