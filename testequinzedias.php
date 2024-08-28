<?php
// desafio 1 variáveis
$nome = "Danilo";
$idade = 33;
$salario = 1000.01;

echo  "Nome: {$nome} <br> Idade: {$idade} <br> Salario:{$salario} <br>";

echo "<br>";

// desafio 2 tipos de variáveis

$string_var = "olá mundo";
$integer_var = 12;
$float_var = 3.14;
$boolean_var = true;
$array = array(1,2,3,4,5);

echo "Variável string:<br>";
var_dump($string_var);
echo "<br><br>";

echo "Variável integer:<br>";
var_dump($integer_var);
echo "<br><br>";

echo "Variável float:<br>";
var_dump($float_var);
echo "<br><br>";

echo "Variável boolean:<br>";
var_dump($boolean_var);
echo "<br><br>";

echo "Variável array:<br>";
var_dump($array);
echo "<br><br>";

// desafio 3 condicionais (if e switch case)

$nota = 80;

if($nota >= 90 && $nota <= 100){
    $classificacao = "Excelente";
}elseif ($nota >= 70 && $nota <= 89){
    $classificacao = "Bom";
}elseif ($nota >= 50 && $nota <= 69){
    $classificacao = "Regular";
}elseif ($nota >= 0 && $nota <= 49){
    $classificacao = "Insuficiente";
}
switch ($classificacao) {
    case "Excelente":
        echo "Sua nota é Excelente";
        break;
    case "Bom";
        echo "Sua nota é boa";
        break;
    case "Regular";
        echo "Sua nota é regular";
        break;
    case "Insuficiente";
        echo "Sua nota é insuficiente";
        break;
    default:
        echo "Nota não encontrada";
}
    echo "<br><br>";

// desafio 4 loops (for, while, do while)

for ($numero =1; $numero <= 10; $numero++){
    echo $numero . " ";
} echo "<br><br>";

$numero = 10;
while ($numero >= 1){
    echo $numero ;
    $numero--;
}   echo "<br><br>";


$numero = 1;

do {
    if ($numero % 2 != 0) {
        echo $numero . " ";
    }
    $numero++;

} while ($numero <= 10);

echo "<br><br>";

// desafio 5 funções

function saudacao ($nome){
    echo "Olá, $nome!";
} $nome = "Danilo";
saudacao($nome);
    echo "<br><br>";

function soma($a , $b){
    return $a + $b;
}
$a = 10;
$b = 20;
$resultado = soma($a, $b);
echo "A soma de $a e $b é igual a $resultado.";
echo "<br><br>";

// desafio 6 integrador

$numeros = array(2, 3, 6, 7, 9, 10, 13);    // declarar variavel

function processarNumero($numero){  // função definida
if ($numero % 2 == 0) {     // verifica se numero é impar ou par
  $parOuImpar = "par";
} else {
   $parOuImpar = "ímpar";
}
  $ehPrimo = true;        // verifica se numero é primo
    if ($numero <= 1) {
     $ehPrimo = false;
    } else {
     for ($i = 2; $i <= sqrt($numero); $i++) {
       if ($numero % $i == 0) {
        $ehPrimo = false;
         break;
            }    }}

    $resultado = "Número $numero é $parOuImpar e "; "<br>";
    if ($ehPrimo) {
        $resultado .= "é primo.;<br>";
    } else {
        $resultado .= "não é primo.; <br>";
    }

    return $resultado;
}

foreach ($numeros as $numero) {
    echo processarNumero($numero) . "\n";
}








