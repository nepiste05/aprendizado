<?php
// Juros por atrasos
function calcularJurosAtraso($valor_fatura, $dias_atraso, $bom_pagador) {
    if ($dias_atraso <= 5) {
        $juros_por_dia = 0.02; // 2% ao dia
    } elseif ($dias_atraso <= 10) {
        $juros_por_dia = 0.03; // 3% ao dia
    } else {
        $juros_por_dia = 0.05; // 5% ao dia
    }
    $juros = $valor_fatura * $juros_por_dia * $dias_atraso;
    if ($bom_pagador == 'sim') {
        $desconto = 0.02 * $valor_fatura;
    } else {
        $desconto = 0.0; // sem desconto
    }
    $valor_total = $valor_fatura + $juros - $desconto;
    return number_format($valor_total, 2, ',', '.');
}
$valor_fatura = 500.00;
$dias_atraso = 7;
$bom_pagador = 'sim'; // ou 'nao' para teste

$valor_total = calcularJurosAtraso($valor_fatura, $dias_atraso, $bom_pagador);
echo "O valor total a ser pago é R$ {$valor_total}";
