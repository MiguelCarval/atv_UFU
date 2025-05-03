<!--Atividade 22: Vetores --> 

<?php

echo "Digite 10 valores para o V1: \n";
$V1 = [];
$V2 = [];
$VF = [];

for($i = 0; $i <10; $i++){
    $V1[$i] = readline();
}


echo "Digite 10 valores para o V2: \n";
for($i = 0; $i <10; $i++){
    $V2[$i] = readline();
}

for($i= 0; $i <10; $i++){
    if ($i % 2 == 0) {
        $VF[$i] = $V1[$i];
    } else {
        $VF[$i] = $V2[$i];
    }
            
}

print_r($VF)
?>