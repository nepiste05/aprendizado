<?php
$nota = 5;
if($nota <= 2) {
    echo 'Nota fraca';
} elseif ($nota <= 4) {
    echo 'Nota insuficiente';
}elseif ($nota <= 6) {
    echo 'Nota razoavel';
}elseif ($nota <= 8) {
    echo 'Nota positiva';
}else {
    echo 'Nota excelente';

}

echo "<hr>"; // quebra de linha
//switch é usado quando tem varias condições
$numero = 10;
switch ($numero){
    case 8:
        echo "8";
        break; // coloca no final de cada instrução
    case 9;
        echo "9";
        break;
    default: // é igual else
        echo "Nenhum dos valores";
}