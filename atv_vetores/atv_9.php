<!--Atividade 9: Vetores -->

<?php

$V = [];
echo "Digite 6 valores pares para o vetor: \n";

for($i = 0; $i <6; $i++){
    do{
        $valor = readline("Digite um valor par: ");

        if($valor % 2 != 0){
            echo "O valor $valor n é par, digite valores pares: \n";

        }
    }while($valor % 2 != 0);

    $V[$i] = $valor;

    
}

echo "Vetor:\n ";
print_r($V);


echo "Vetor inverso: \n";
$IV = array_reverse($V);
print_r($IV);

?>