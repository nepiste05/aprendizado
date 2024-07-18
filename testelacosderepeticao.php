<?php
//desafio 1 laço for numero pares

for ($numero_par=0; $numero_par <= 20; $numero_par++) {
    if ($numero_par % 2 == 0) {
        echo $numero_par. "\n";
    }
}
echo "<br>";

// desafio 2 laço while soma dos numeros
$soma = 0;
$contador = 1;
while ($contador <= 100) {
    $soma += $contador;
    $contador++;
} echo "Soma dos numeros=". $soma."\n";
    echo "<br>";

// desafio 3 if-else verificar idade

$idade = 17;
if ($idade > 18) {
    echo "Voçê é maior de idade.";
}elseif ($idade == 18){
      echo "Voçê tem 18 anos.";
}else{
        echo "Voçê é menor de idade.";
}            echo "<br>";

// desafio 4 switch-case dia da semana

$numero = 3;
    switch ($numero) {
    case 1:
        echo "Hoje é domingo.";
        break;
    case 2:
        echo "Hoje é segunda-feira.";
        break;
    case 3: 
        echo "Hoje é terça-feira.";
        break;
    case 4: 
        echo "Hoje é quarta-feria.";
        break;
    case 5:
        echo "Hoje é quinta-feria.";
        break;
    case 6:
        echo "Hoje é sexta-feria.";
        break;
    case 7:
        echo "Hoje é sábado.";
        break;
    default:
        echo "Dia invalido.";   
}   echo "<br>";

// desafio 5 numeros primos

$numero = 5;
$contador = 0;
for ($i = 1; $i <= $numero; $i++) {
    if $numero % '$1 == 0';
    {
         $contador++;
    }
}
    if ($contador == 2) {
        echo "O numero é primo";
    } else {
        echo "O numero não é primo";
    }

