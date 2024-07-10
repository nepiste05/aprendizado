<?php
$numero1 = 20;
$numero2 = 10;
$numero3 = 2;

$array = array($numero1, $numero2, $numero3);

// Inicializa as variáveis para o maior e menor número
$maior = 0;
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
//echo "Maior número: $maior\n";
//echo "Menor número: $menor\n";

$matriz = array(array(1,2,3, 8, "k", 000),array(4,5,6),array(7,8,9));

echo "<br>";
echo $matriz[2][2];
echo "<pre>";
var_dump($matriz);

foreach($matriz as $intChave => $array){
    foreach($array as $colunas){
        echo $colunas . " <br>";
    }
}