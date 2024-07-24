<?php
// Desafio 1
function somaDigitos($numero) {
    // se o número é menor que 10, retorna ele mesmo
    if ($numero < 10) {
        return $numero;
    }

    // Passo recursivo: calcula o último dígito e chama recursivamente com o número restante
    $ultimoDigito = $numero %10; // utiliza o modulo (%) para verificar o ultimo numero da sequencia
    $numeroRestante = (int)($numero / 10);

    return $ultimoDigito + somaDigitos($numeroRestante);
}

$numero1 = 1234;
echo "A soma dos dígitos de $numero1 é: " . somaDigitos($numero1) . "\n";

echo "<br>";

// Desafio 2

function isPalindrome($word) {
    // Função recursiva para verificar se é palíndromo
    // Caso base: se a palavra tem 0 ou 1 caractere, é um palíndromo
    if (strlen($word) <= 1) {
        return true;
    } else {
        // Comparar o primeiro e o último caractere
        if ($word[0] == $word[strlen($word) - 1]) {
            // Chamada recursiva para o subproblema
            return isPalindrome(substr($word, 1, strlen($word) - 2));
        } else {
            return false;
        }
    }
}

$word1 = "ana";
$word2 = "ama";
$word3 = "casa";

echo "Verificando se '$word1' é palíndromo: " . (isPalindrome($word1) ? "Sim" : "Não") . "<br>";
echo "Verificando se '$word2' é palíndromo: " . (isPalindrome($word2) ? "Sim" : "Não") . "<br>";
echo "Verificando se '$word3' é palíndromo: " . (isPalindrome($word3) ? "Sim" : "Não") . "<br>";

echo "<br>";

// desafio 3

function encontrarMaior($array){
    if (count($array) == 1) {
        return $array[0];
    }else {
        $elemento = $array[0];
        $restodoArray = $array[1];

        $maiodorestante = encontrarMaior($restodoArray);
        return ($elemento) == $maiodorestante ? $elemento : $maiodorestante;
    }
}

$arrayNumeros = [10,2,13,4,23,];
$maiorValor = encontrarMaior($arrayNumeros);
echo "O maior valor de Array é: $maiorValor";