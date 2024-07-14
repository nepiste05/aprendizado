<?php
// desafio 1 if e if-else
$numero = 5;
if ($numero > 0) {
    echo "O numero é positivo";
}elseif ($numero < 0) {
    echo "O numero é negativo";
}else {
    echo "O numero é zero";
}
echo "<br>";

// desafio 2 switch-case
$dia = "quinta";
switch ($dia) {
    case 'segunda':
        echo "Segunda-feira";
    case 'terca':
        echo "Terca-feira";
    case 'quarta':
        echo "Quarta-feira";
    case 'quinta':
        echo "Quinta-feira";
    case 'sexta':
        echo "Sexta-feira";
    case 'sábado':
        echo "Sábado";
    case 'doming':
        echo "Domingo";
}


