<?php
// Função para calcular o fatorial de um número inteiro não negativo $n
function fatorial($n) {
    // Caso base: 0! e 1! são iguais a 1
    if ($n <= 0) {
        return 1; // se nâo for 0! e 1! multiplica o return pelo fatorial n:
    }
    // Passo recursivo: n * fatorial(n-1) caso n seja maior que 0 continua a verificação
    return $n * fatorial($n -1);
}

// Teste // N:5 (5x4x3x2x1) =120
echo fatorial(5); // Saída: 120

echo "<br>";

function fibonacci($n) {                                        //
    // Casos base: F(0) = 0 e F(1) = 1
    if ($n == 0) {
        return 0;
    }
    if ($n == 1) {
        return 1;
    }
    // A função fibonacci então faz chamadas recursivas para calcular fibonacci(8),
    // fibonacci(7), fibonacci(6), ...,
    // até chegar aos casos base (fibonacci(0) e fibonacci(1)).
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// Teste
echo fibonacci(9); //chama função recursiva para calcular o 9º número na sequência de Fibonacci

echo "<br>";

function somaArray($array) {
    // Caso base: array vazio tem soma 0
    if (empty($array)) {
        return 0;
    }
    // Passo recursivo: somar o primeiro elemento com a soma do resto do array
    return array_shift($array) + somaArray($array);
}

// Teste
$array = [1, 2, 3, 4, 5];
echo somaArray($array); // Saída: 15
echo "<br>";


