<!--Atividade 11: Vetores -->

<?php

echo "Digite 10 valores reais: \n";

$V = [];

for($i = 0; $i < 10; $i++){

$V[$i] = (float)readline();

}


$somarPositivos = 0;
$contarNegativos = 0;

for($i = 0; $i < count($V); $i++){
    if($V[$i] < 0){
        $contarNegativos++;
    }else{
        $somarPositivos += $V[$i];
        
    }
}

echo "A soma dos valores positivos é: ". $somarPositivos . "\n";
echo "A quantidade de valores negativos são: ". $contarNegativos;

?>