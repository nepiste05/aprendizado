<?php
// Bonus por metas
function calcularNovoSalario($salarioAtual, $metasAlcancadas) {
    if ($metasAlcancadas < 1) {
        $percentualAumento = 0.02;
    } elseif ($metasAlcancadas >= 1 && $metasAlcancadas <= 3) {
        // De 1 a 3 metas alcançadas: aumento de 5%
        $percentualAumento = 0.05;
    } else {
        // Mais de 3 metas alcançadas: aumento de 10%
        $percentualAumento = 0.10;
    }

    // valor do aumento
    $aumento = $salarioAtual * $percentualAumento;

    $novoSalario = $salarioAtual + $aumento;
    return $novoSalario;
}
$salarioAtual = 3000; // Exemplo: salário atual do funcionário em reais
$metasAlcancadas = 4; // Exemplo: número de metas alcançadas pelo funcionário
$novoSalario = calcularNovoSalario($salarioAtual, $metasAlcancadas);

echo "Salário Atual: R$" . number_format($salarioAtual, 2, ',', '.') . "<br>";
echo "Metas Alcançadas: " . $metasAlcancadas . "<br>";
echo "Novo Salário: R$" . number_format($novoSalario, 2, ',', '.') . "<br>";
