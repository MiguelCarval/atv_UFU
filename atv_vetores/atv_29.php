<!--Atividade 28: Vetores -->

<?php

echo "Digite 6 valores para o vetor \n";
$V = [];
$Vp = [];
$Vi = [];
$soma = 0;
$impares = 0;

for($i = 0; $i< 6; $i++){
    $V[$i] = (int)readline();
}


for($i = 0; $i < count($V); $i++){
    

    if($V[$i] % 2 == 0){
      $Vp[] = $V[$i];
    }else{
        $Vi[] = $V[$i];
    }

    $impares = count($Vi);

    
}


echo "Números pares digitados: \n";
foreach($Vp as $valores){
    echo $valores . "\n";
    $soma += $valores;  
}

 echo "A soma dos números pares é: $soma \n"; 



echo "Números ímpares digitados: \n";
foreach($Vi as $valores){
    echo $valores . "\n";

}

echo "A quantidade de números ímpares digitados foram: $impares \n";

?>