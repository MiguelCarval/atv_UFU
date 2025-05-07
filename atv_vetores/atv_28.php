<!--Atividade 28: Vetores -->
<?php

$V = [];
$V1 = [];
$V2 = [];

echo "Digite 10 valores para o vetor \n";

for($i = 0; $i < 10; $i++){

    $V[$i] = readline();
}

for($i = 0; $i < count($V); $i++){
    if($V[$i] % 2 == 0){
        $V1[] = $V[$i];
    }else{
        $V2[] = $V[$i];
    }
}

echo "Vetor par: \n";
print_r($V1);


echo "Vetor impar: \n";
print_r($V2);
?>