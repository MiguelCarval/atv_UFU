<!--Atividade 32: Vetores -->
<?php

$x = [];
$y = [];
$soma = [];

echo "Digite 5 valores para o vetor x: \n";

for($i = 0; $i < 5; $i++){

    $x[$i] = (int)readline();

}

echo "Digite 5 valores para o vetor y: \n";

for($i = 0; $i < 5; $i++){

    $y[$i] = (int)readline();

}


echo "A soma dos Vetores: \n";

for($i = 0; $i < 5; $i++){

    $soma[$i] = $x[$i] + $y[$i];

}

print_r($soma);


echo "O produto dos vetores x e y: \n";
for($i = 0; $i < count($x); $i++){

    $produto = $x[$i] * $y[$i];
}

echo $produto . "\n";



echo "A diferença entre os vetores: \n";
$diferenças = false;

foreach($x as $valores){
    if(!in_array($valores, $y)){
        echo $valores . "\n";
        $diferenças = true;
    }
 } 
 
 if($diferenças != true){
    echo "todos os valores do vetor x estão presentes no vetor y \n";
 }


 echo "A interseção entre x e y: \n";
 foreach($x as $valor){
    if(in_array($valor, $y)){
        echo $valor . "\n";
    }
 }
    

 echo "A união dos vetores x e y: \n";

 $uniao = array_unique(array_merge($x, $y));

 print_r($uniao);



?>