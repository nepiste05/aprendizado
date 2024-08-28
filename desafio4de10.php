<?php
// calcular os pontos
function calcularPontosPorLeitura($livrosLidos) {
    if ($livrosLidos <= 5) {
        // Até 5 livros lidos: 10 pontos por livro
        $pontos = $livrosLidos * 10;
    } elseif ($livrosLidos <= 10) {
        // De 6 a 10 livros lidos: 20 pontos por livro
        $pontos = $livrosLidos * 20;
    } else {
        // Acima de 10 livros lidos: 30 pontos por livro
        $pontos = $livrosLidos * 30;
    }

    return $pontos;
}
$livrosLidos = 8; // Exemplo: quantidade de livros lidos no mês
$pontos = calcularPontosPorLeitura($livrosLidos);

echo "Livros lidos no mês: " . $livrosLidos . "<br>";
echo "Pontos obtidos: " . $pontos . "<br>";
