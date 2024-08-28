<?php
// horas extras
function calcularNovoSalario($salarioAtual, $horasExtras) {
    // Definição dos percentuais de bônus por hora extra
    $percentualAte10Horas = 0.02; // 2% por hora extra
    $percentualDe10a20Horas = 0.03; // 3% por hora extra
    $percentualMais20Horas = 0.05; // 5% por hora extra

    if ($horasExtras <= 10) {
        $percentual = $percentualAte10Horas;
    } elseif ($horasExtras <= 20) {
        $percentual = $percentualDe10a20Horas;
    } else {
        $percentual = $percentualMais20Horas;
    }
    $aumento = $salarioAtual * $percentual * $horasExtras;
    $novoSalario = $salarioAtual + $aumento;
    return $novoSalario;
}
$salarioAtual = 3000; // Exemplo: salário atual do funcionário em reais
$horasExtras = 15; // Exemplo: número de horas extras feitas no mês
$novoSalario = calcularNovoSalario($salarioAtual, $horasExtras);

echo "Salário Atual: R$" . number_format($salarioAtual, 2, ',', '.') . "<br>";
echo "Horas Extras Feitas no Mês: " . $horasExtras . "<br>";
echo "Novo Salário: R$" . number_format($novoSalario, 2, ',', '.') . "<br>";
