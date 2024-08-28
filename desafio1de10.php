<?php
// Emprestimo Estudantil
function calcularPrestacao($valorCurso, $salarioResponsavel, $anos) {
    // Taxa de juros anual (exemplo, pode ser ajustado conforme necessário)
    $taxaJurosAnual = 0.05; // 5% ao ano

    // valor total do empréstimo (curso + juros)
    $valorTotal = $valorCurso * (1 + $taxaJurosAnual);
    $meses = $anos * 12;

    $prestacaoMensal = $valorTotal / $meses;
    return $prestacaoMensal;
}
$valorCurso = 10000; // Exemplo: valor do curso em reais
$salarioResponsavel = 3000; // Exemplo: salário do responsável em reais
$anos = 5; // Exemplo: prazo de pagamento em anos

$prestacaoMensal = calcularPrestacao($valorCurso, $salarioResponsavel, $anos);

$limitePorcentagem = 0.2; // 20%
$limiteSalario = $salarioResponsavel * $limitePorcentagem;

if ($prestacaoMensal <= $limiteSalario) {
    echo "Empréstimo Aprovado!<br>";
    echo "Valor da prestação mensal: R$" . number_format($prestacaoMensal, 2, ',', '.') . "<br>";
} else {
    echo "Empréstimo Negado. A prestação mensal excede 20% do salário do responsável.<br>";
    echo "Prestação mensal solicitada: R$" . number_format($prestacaoMensal, 2, ',', '.') . "<br>";
    echo "Limite máximo permitido: R$" . number_format($limiteSalario, 2, ',', '.') . "<br>";
}
echo "<br";

// Desafio 2 Emprestimo compra de carro

