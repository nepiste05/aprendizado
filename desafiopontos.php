<?php
function calcularPontosDinheiro($horasdeAtividades) {
    if ($horasdeAtividades <= 10) {
        $pontos = $horasdeAtividades * 2;
    } elseif ($horasdeAtividades <= 20) {
        $pontos = 10 * 2 + ($horasdeAtividades - 10) * 5;
    } else {
        $pontos = 10 * 2 + 10 * 5 + ($horasdeAtividades - 20) * 10;
    }

    $dinheiro = $pontos * 0.05;
    return "Total de pontos: " . $pontos . ", dinheiro ganho: R$ " . number_format($dinheiro, 2);
}

$horasdeAtividades = 25;

echo calcularPontosDinheiro($horasdeAtividades);
