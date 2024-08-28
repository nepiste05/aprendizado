<?php
// Emprestismo Compra de carro
function calcularPrestacao($valorCarro, $salarioComprador, $anos) {

    $taxaJurosAnual = 0.08; // 8% ao ano

    $valorTotal = $valorCarro * (1 + $taxaJurosAnual);
    $meses = $anos * 12;

    $prestacaoMensal = $valorTotal / $meses;
    return $prestacaoMensal;
}
$valorCarro = 30000; // Exemplo: valor do carro em reais
$salarioComprador = 5000; // Exemplo: salário do comprador em reais
$anos = 5; // Exemplo: prazo de pagamento em anos

// Prestação mensal
$prestacaoMensal = calcularPrestacao($valorCarro, $salarioComprador, $anos);

// Verificando se a prestação mensal excede 25% do salário
$limitePorcentagem = 0.25; // 25%
$limiteSalario = $salarioComprador * $limitePorcentagem;

if ($prestacaoMensal <= $limiteSalario) {
    echo "Empréstimo Aprovado!<br>";
    echo "Valor da prestação mensal: R$" . number_format($prestacaoMensal, 2, ',', '.') . "<br>";
} else {
    echo "Empréstimo Negado. A prestação mensal excede 25% do salário do comprador.<br>";
    echo "Prestação mensal solicitada: R$" . number_format($prestacaoMensal, 2, ',', '.') . "<br>";
    echo "Limite máximo permitido: R$" . number_format($limiteSalario, 2, ',', '.') . "<br>";
}
