<?php
function calcularPrestacao($valorCasa, $salarioComprador, $anosPagar){
    $prestacao = ($valorCasa / ($anosPagar * 12));

    if ($prestacao > $salarioComprador * 0.3) {
        return false;
    } else {
    return number_format($prestacao, 2);
    }
}

$valorCasa = 500000;
$salarioComprador = 30000;
$anosPagar = 30;

$resultado = calcularPrestacao($valorCasa, $salarioComprador, $anosPagar);

if ($resultado === false) {
    echo "Emprestimo negado";
}else {
    echo "Emprestimo aprovado. Prestação mensal: R$" . ($resultado);
}

