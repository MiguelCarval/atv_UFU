<!--Atividade 25: Vetores --> 

<?php

$alunos =[];

for($i = 0; $i< 5; $i++){
   echo "Digite o numero do aluno: ".  ($i +1) ."\n";
   $numeros = trim(fgets(STDIN));

   echo "Digite a altura do aluno: ". ($i + 1)."\n";
   $altura = trim(fgets(STDIN));

   $alunos[$numeros] =floatval($altura);
}


reset($alunos);
$primeiroNumero = key($alunos);
$maisAlto = $maisbaixo = $alunos[$primeiroNumero];
$alunoMaisAlto = $alunoMaisBaixo = $primeiroNumero;


foreach($alunos as $numero => $altura){
    if($altura > $maisAlto){
        $maisAlto = $altura;
        $alunoMaisAlto = $numero;
    }else if($altura < $maisbaixo){
        $maisbaixo = $altura;
        $alunoMaisBaixo = $numero;
    }

    
}


echo "O aluno: " . $alunoMaisAlto . " é o mais alto com: " . $maisAlto . "\n";
echo "O aluno: " . $alunoMaisBaixo . " é o mais baixo com: " . $maisbaixo . "\n";

?>