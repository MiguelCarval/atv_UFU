<!--Atividade 34: Vetores -->
<?php

$V = [];

echo "Digite 10 valores DIFERENTES para o vetor \n";

while(count($V) < 10){

    $valores = (int)readline();

    if(in_array($valores, $V)){
        echo "pfv digite outro valor diferente \n";
    }else{
        $V[] = $valores;
    }

}


echo "Vetor final: \n";
print_r($V);

?>