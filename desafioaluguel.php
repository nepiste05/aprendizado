<?php
function calcularPrecoAluguel($tipodeCarro, $diasAlugado, $kmPercorridos) {
    $precoPopular = 90;
    $precoLuxo = 150;

    $precoluxo = 150;

    $precokmPopular1 = 0.20;
    $precokmPopular2 = 0.10;
    $precokmLuxo1 = 0.30;
    $precokmLuxo2 = 0.25;

    if ($tipodeCarro == "popular") {
        $precoDiario = $precoPopular;
        if ($kmPercorridos <= 100) {
            $precoTotal = $precoDiario * $diasAlugado + $kmPercorridos * $precoluxo * $precokmPopular1;
        } else {
            $precoTotal = $precoDiario * $diasAlugado + (100 * $precokmPopular1) + (($kmPercorridos - 100) * $precoluxo * $precokmPopular2);
        }
    } elseif ($tipodeCarro == "Luxo") {
        $precoDiario = $precoLuxo;
        if ($kmPercorridos <= 200) {
            $precoTotal = $precoDiario * $diasAlugado + $kmPercorridos * $precoluxo * $precokmLuxo1;
        } else {
            $precoTotal = $precoDiario * $diasAlugado + (200 * $precokmLuxo1) + (($kmPercorridos - 200) * $precoluxo * $precokmLuxo2);
        }
    } else {
        return "Tipo de carro inválido.";
    }
    return "Preço total a ser pago: R$ " . number_format($precoTotal, 2);
}

$tipodeCarro = "Luxo";
$diasAlugado = 10;
$kmPercorridos = 100;

echo calcularPrecoAluguel($tipodeCarro, $diasAlugado, $kmPercorridos);
?>
