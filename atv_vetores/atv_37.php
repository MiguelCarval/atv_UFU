<!--Atividade 37: Vetores --> 
<?php 

$A = [1, 3, 5, 7, 9, 11, 10, 8, 6, 4, 2];

function ordenar($A){

$parte1 = array_slice($A, 0, 6);
$parte2 = array_slice($A, 6);

$parte2 = array_reverse($parte2);

$resultado = [];
$i = 0;
$j = 0;

while($i < count($parte1) && $j < count($parte2)){
    if($parte1[$i] < $parte2[$j]){
        $resultado[] = $parte1[$i];
        $i++;
    }else{
        $resultado[] = $parte2[$j];
        $j++;
    }
}


while($i < count($parte1)){
    $resultado[] = $parte1[$i++];
}

while($j < count($parte2)){
    $resultado[] = $parte2[$j++];
}


return $resultado;

}


print_r(ordenar($A));

?>
