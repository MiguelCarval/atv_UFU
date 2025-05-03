<!--Atividade 16: Vetores -->

<?php
echo "Digite 5 valores para o vetor : \n";
$V = [];
$codigo = 0;

for($i = 0; $i < 5; $i++){

    $V[$i] = readline();
}


echo "Digite o código :\n";
$codigo = (int)readline();
switch($codigo){
    case 0:
        echo "Ok, programa encerrado";
        break;

    case 1:
        echo "Vetor na ordem normal:\n";
        print_r($V);
        break;
    
    case 2:
        echo "Vetor na ordem normal:\n";
        print_r(array_reverse($V));
        break;

    default:
    echo "Código invalido";
}

?>