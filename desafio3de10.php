<?php
// Aluguel de equipamentos
function calcularPrecoAluguel($tipoEquipamento, $diasAluguel, $horasUso) {
    // Taxas de aluguel
    $precoDiario = 50.00;
    $precoHora = 10.00;

    //total baseado nos dias e horas de uso
    $precoTotal = $diasAluguel * $precoDiario + $horasUso * $precoHora;
    return $precoTotal;
}

// Simulação de entrada do usuário
$tipoEquipamento = "Escavadeira";
$diasAluguel = 3;
$horasUso = 8;

// Calculando o preço total do aluguel
$totalPagar = calcularPrecoAluguel($tipoEquipamento, $diasAluguel, $horasUso);

echo "Tipo de Equipamento: " . $tipoEquipamento . "<br>";
echo "Dias de Aluguel: " . $diasAluguel . "<br>";
echo "Horas de Uso: " . $horasUso . "<br>";
echo "Preço Total a Pagar: R$" . number_format($totalPagar, 2, ',', '.') . "<br>";
