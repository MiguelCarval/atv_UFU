<!--Atividade 35: Vetores -->
<?php

$a = 0;
$b = 0;
$soma = [];

echo "Digite o valor de a: \n";

while($a == 0){

    $valor = (int)readline();

    if($valor > 0 && $valor <= 1000){
        $a = $valor;
    }else{
        echo "Valor invalido \n";
    }
}



echo "Digite o valor de b: \n";

while($b == 0){

    $valor2 = (int)readline();

    if($valor2 > 0 && $valor2 <= 1000){
        $b = $valor2;
    }else{
        echo "Valor invalido \n";
    }
}



echo "A: ". $a .", B: " . $b . "\n" ;


$vetorA = array_map('intval',str_split(strrev((string)$a)));
$vetorB = array_map('intval',str_split(strrev((string)$b)));



echo "Vetor A (Algarismo): \n";
print_r($vetorA);


echo "Vetor B (Algarismo): \n";
print_r($vetorB);


$tamA = count($vetorA);
$tamB = count($vetorB);
$maiorTamanho = max($tamA, $tamB);
$vaiUm = 0;

for ($i = 0; $i < $maiorTamanho; $i++) {
    $digitoA = $i < $tamA ? $vetorA[$i] : 0;
    $digitoB = $i < $tamB ? $vetorB[$i] : 0;

    $somaAlgarismos = $digitoA + $digitoB + $vaiUm;

    if ($somaAlgarismos >= 10) {
        $vaiUm = 1;
        $soma[] = $somaAlgarismos - 10;
    } else {
        $vaiUm = 0;
        $soma[] = $somaAlgarismos;
    }
}

if ($vaiUm > 0) {
    $soma[] = $vaiUm;
}

echo "Soma dos vetores (algarismo por algarismo): \n";
print_r($soma);

?>