<!--Atividade 14: Vetores -->

<?php 

echo "Digite 10 valores: \n";

$V = [];
$iguais = 0;
$V_iguais = [];

for ($i = 0; $i < 10; $i++) {
    $V[$i] = (int)readline("Digite o valor para a posição $i: ");
}

print_r($V); 


for ($i = 0; $i < count($V); $i++) {
    for ($j = $i + 1; $j < count($V); $j++) { 
        if ($V[$i] == $V[$j]) {  
            
            if (!in_array($V[$i], $V_iguais)) {
                $V_iguais[] = $V[$i];  
                $iguais++;  
            }
        }
    }
}

// Exibindo os resultados
if ($iguais > 0) {
    echo "Existem $iguais valores repetidos: \n";
    print_r($V_iguais);
} else {
    echo "Não há valores repetidos.\n";
}

?>
