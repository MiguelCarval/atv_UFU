<!--Atividade 17: Vetores -->

<?php

echo "Digite 10 valores para o vetor \n";
$V =[];

for($i= 0; $i < 10 ; $i++){

    $V[$i] = (int)readline();
}

for($i = 0; $i <count($V); $i++){

    if($V[$i] < 0){
        $V[$i] = 0;
        
    }

}

print_r($V)

?>

