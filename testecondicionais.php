<?php
// desafio 1 if e if-else
$numero = 5;
if ($numero > 0) {
    echo "O numero é positivo";
}elseif ($numero < 0) {
    echo "O numero é negativo";
}else {
    echo "O numero é zero";}
            echo "<br>";

// desafio 2 switch-case
$dia = "domingo";
switch ($dia) {
    case 'segunda':
        echo "Segunda-feira";
    break;
    case 'terca':
        echo "Terca-feira";
    break;
    case 'quarta':
        echo "Quarta-feira";
    break;
    case 'quinta':
        echo "Quinta-feira";
    break;
    case 'sexta':
        echo "Sexta-feira";
    break;
    case 'sábado':
        echo "Sábado";
    break;
    case 'domingo':
        echo "Domingo";
    break; }

            echo "<br>";

// desafio 3 Laço while

$numero = 1;
while ($numero <= 10) {
    echo "Numero: $numero <br>";
    $numero++;
}
    echo "<br>";

//desafio 4 Laço do-while

$numero = 11;
do {
    echo "Digite um numero maior que 10: <Br>";

    if ($numero <= 10) {
        echo "Numero é menor ou igual a 10.\n";
    }   break;
} while ($numero <= 10);
    echo "Numero digitado é maior que 10:$numero\n";
    "break\n";
echo "<br>";

// desafio 5 Laço for

$numero = 2;
for ($i= 0; $i <= 10; $i++) {
    echo "{$numero} * {$i} =".($numero*$i). "<br>";
}

echo "<br>";

// desafio 6 Laço foreach

$nomes = array ('Beto','Karine','Ana','Frida');
foreach ($nomes as $nome) {
    echo "Nome:$nome <br>";
}