<!--Atividade 23: Vetores --> 

<?php
$V1 = [];
$V2 = [];

echo "Digite 5 valores para o Vetor 1 \n";

for($i = 0; $i< 5; $i++){
    $V1[$i] = (float)readline();
}


echo "Digite 5 valores para o Vetor 2 \n";

for($i = 0; $i < 5; $i++){
    $V2[$i] = (float)readline();
}


$produtoEscalar = 0;
for($i = 0; $i < 5; $i++){
    $produtoEscalar += $V1[$i] * $V2[$i];
}



echo "Vetor 1:[ ". implode(", ",$V1) ." ]\n";
echo "Vetor 2:[ ". implode(", ",$V2). " ]\n";
echo "Produto escalar: " . $produtoEscalar;
?>