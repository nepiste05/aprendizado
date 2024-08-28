<?php
// Exercicio 1
$nome = "Danilo"; // tipo: String
$idade = 25; // tipo: int
$altura = 1.75; // tipo: double ou float

// Exibindo os tipos de dados
echo "O tipo de dado de 'nome' é: " . gettype($nome) . "<br>";
echo "O tipo de dado de 'idade' é: " . gettype($idade) . "<br>";
echo "O tipo de dado de 'altura' é: " . gettype($altura) . "<br>";
echo "<br>";

// Exercicio 2
$numero = 8;

// Verificando se o número é positivo, negativo ou zero
if ($numero > 0) {
    echo "Número é positivo";
} elseif ($numero < 0) {
    echo "Número é negativo";
} else {
    echo "Número é zero";
}
echo "<br>";

// Verificando se o número é par ou ímpar
if ($numero % 2 == 0) {
    echo "Número é par.<br>";
} else {
    echo "Número é ímpar.<br>";
}
echo "<br>";

// Usando switch para determinar o dia da semana
$dia = 3;

switch ($dia) {
    case 1:
        echo "Hoje é segunda-feira";
        break;
    case 2:
        echo "Hoje é terça-feira";
        break;
    case 3:
        echo "Hoje é quarta-feira";
        break;
    case 4:
        echo "Hoje é quinta-feira";
        break;
    case 5:
        echo "Hoje é sexta-feira";
        break;
    case 6:
        echo "Hoje é sábado";
        break;
    case 7:
        echo "Hoje é domingo";
        break;
    default:
        echo "Número inválido";
        break;
}
echo "<br>";

// Usando loop for para exibir números de 1 a 10
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
echo "<br>";

// Usando loop for para exibir números pares de 1 a 10
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
echo "<br>";

// Usando loop while para exibir números de 1 a 10
$i = 1;
while ($i <= 10) {
    echo $i . "<br>";
    $i++;
}
echo "<br>";

// Usando loop do-while para exibir números de 1 a 10
$i = 1;
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 10);
echo "<br>";

// Usando foreach para exibir nomes em um array
$nomes = ["Ana", "Bruno", "Carlos", "Daniela"];
foreach ($nomes as $nome) {
    echo $nome . "<br>";
}
echo "<br>";

// Exibindo informações de um array associativo
$pessoa = [
    'nome' => 'Maria',
    'idade' => 30,
    'cidade' => 'São Paulo',
];

echo "Nome: " . $pessoa['nome'] . "<br>";
echo "Idade: " . $pessoa['idade'] . "<br>";
echo "Cidade: " . $pessoa['cidade'] . "<br>";
echo "<br>";

// Exibindo os elementos de uma matriz
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

foreach ($matriz as $row) { // row = linha
    foreach ($row as $value) { // value = valor
        echo $value . " ";
    }
    echo "<br>";
}
echo "<br>";

// Função para exibir uma saudação
function saudacao($nome) {
    echo "Olá, $nome<br>";
}

$nome = "Maria";
saudacao($nome);
echo "<br>";

// Função para somar dois números
function soma($a, $b) {
    return $a + $b;
}

$resultado = soma(12, 8);
echo "O resultado da soma é: $resultado<br>";
echo "<br>";

// Função para calcular o fatorial de um número
function fatorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * fatorial($n - 1);
    }
}

$numero = 5;
echo "O fatorial de $numero é " . fatorial($numero) . "<br>";
echo "<br>";

// Função para calcular o n-ésimo termo da sequência de Fibonacci
function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$termo = 6;
echo "O n-ésimo termo da sequência de Fibonacci é " . fibonacci($termo) . "<br>";
echo "<br>";

// Função para contar o número de vogais em uma string
function contarVogais($texto) {
    $vogais = "aeiouAEIOU";
    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        if (strpos($vogais, $texto[$i]) !== false) {
            $contador++;
        }
    }

    return $contador;
}

$texto = "ordenacao";
echo "Número de vogais em '$texto': " . contarVogais($texto) . "<br>";
echo "<br>";

// Função para ordenar um array usando o algoritmo Bubble Sort
function bubbleSort(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Troca os elementos
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

$numeros = [3, 1, 7, 4, 9, 6, 5, 2, 8];
bubbleSort($numeros); // Ordenando o array

foreach ($numeros as $numero) {
    echo "$numero<br>";
}
?>
