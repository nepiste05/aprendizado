<?php

function calcularnovoSalario($salario, $genero, $anosnaempresa)
{
    if ($genero == "F") {
        if ($anosnaempresa < 15) {
            $aumentoPercentual = 0.05;
        } elseif ($anosnaempresa >= 15 && $anosnaempresa <= 20) {
            $aumentoPercentual = 0.12;
        } else {
            $aumentoPercentual = 0.23;
        }
    } elseif ($genero == "M") {
        if ($anosnaempresa < 20) {
            $aumentoPercentual = 0.03;
        } elseif ($anosnaempresa >= 20 && $anosnaempresa <= 30) {
            $aumentoPercentual = 0.13;
        } else {
            $aumentoPercentual = 0.25;
        }
    } else {
        echo "Gênero inválido";
        return;
    }

    // Cálculo do aumento e novo salário
    $aumento = $salario * $aumentoPercentual;
    $novoSalario = $salario + $aumento;

    return $novoSalario;
}

// Exemplo de uso da função
$novoSalarioAtual = 1600;
$genero = "F";
$anosnaempresa = 17;

$novoSalarioCalculado = calcularnovoSalario($novoSalarioAtual, $genero, $anosnaempresa);
echo "O novo salário é R$ " . number_format($novoSalarioCalculado, 2, ',', '.');
