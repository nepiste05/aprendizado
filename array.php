<?php
$numero1 = 20;
$numero2 = 10;
$numero3 = 2;

$array = array($numero1, $numero2, $numero3);

// Inicializa as variáveis para o maior e menor número
$maior = $array[0];
$menor = $array[0];


// Verifica o maior número
foreach ($array as $numero) {
    if ($numero > $maior) {
        $maior = $numero;
    }
}

// Verifica o menor número
foreach ($array as $numero) {
    if ($numero < $menor) {
        $menor = $numero;
    }
}

// Exibe o maior e o menor número
echo "Maior número: $maior\n";
echo "Menor número: $menor\n";

