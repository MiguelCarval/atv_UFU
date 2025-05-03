<!--Atividade 10: Vetores -->

<?php

$V =[];
echo " Média geral:\n ";

for($i = 1; $i <= 15; $i++){
    do{
        $notas = readline("Digite a nota do aluno $i  (entre 0 e 10):");

        if( $notas < 0 || $notas > 10){
            echo "Digite um valor valido: ";

        }

    }while( $notas < 0 || $notas > 10 );
    
   $V[$i] = $notas;

   
}

echo " Notas: \n ";
print_r($V);


$media = 0;

for($i = 1; $i <=count($V); $i++){
   $media += $V[$i];
}

$resultado = $media / count($V);

$resultado_formatado = number_format($resultado, 2);

echo "A média geral dos alunos foi $resultado_formatado";

?>