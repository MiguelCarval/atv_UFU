<!--Atividade 4: Vetores -->

<?php


$V = [2,5,6,7,34,7.5,40,22.9,90.1];


echo "Digite o primeiro índice (0 x 7):";
$xIndex = (int)readline();

echo "Digite o segunda índice (0 x 7):";
$yIndex = (int)readline();

if($xIndex >= 0 && $xIndex <= 7 && $yIndex >= 0 && $yIndex <= 7){

    $x = $V[$xIndex];
    $y = $V[$yIndex];

    $resultado = $x + $y;


    echo "A soma do " . $x ." e " . $y . " e igual a :" . $resultado ;
}else{
    echo "Índice invalido";
}


?>