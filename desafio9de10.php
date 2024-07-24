<?php
// Desconto em compras
function calcularDescontoCompras($valor_total, $numero_itens, $cliente_fidelidade) {
    $desconto = 0.0;
    $desconto_adicional = 0.0;

    if ($numero_itens <= 5) {
        $desconto = 0.05; // 5%
    } elseif ($numero_itens <= 10) {
        $desconto = 0.10; // 10%
    } else {
        $desconto = 0.15; // 15%
    }
    if ($cliente_fidelidade == 'sim') {
        $desconto_adicional = 0.05;
    }
    $valor_desconto = $valor_total * $desconto;
    $valor_desconto += $valor_total * $desconto_adicional;
    $valor_final = $valor_total - $valor_desconto;

    $valor_final_formatado = number_format($valor_final, 2, ',', '.');
    return $valor_final_formatado;
}
$valor_total = 100.00;
$numero_itens = 7;
$cliente_fidelidade = 'sim'; // ou 'nao' para teste

$valor_final = calcularDescontoCompras($valor_total, $numero_itens, $cliente_fidelidade);

echo "O valor final a ser pago é R$ {$valor_final}";
