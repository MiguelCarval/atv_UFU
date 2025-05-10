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


foreach($V1 as $valores){
    if(!in_array($valores, $V2)){
        $V3[] = $valores;
    }
}

print_r($V3);

?>