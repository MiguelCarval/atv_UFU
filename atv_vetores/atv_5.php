<!--Atividade 5: Vetores -->

<?php

$V = [];
$Vp = [];
for($i= 0; $i < 10; $i++){

echo "Digite os valores para a array: ";
$V[$i] = (int)readline();

}

echo "\n os valores pares da array são: ";
for($i = 0 ; $i < 10; $i++){
if($V[$i] % 2 == 0){
    $Vp[] = $V[$i];
   

  
}
}

 print_r($Vp);
?>