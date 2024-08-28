<?php
// Taxa de servico
function calcularValorTotal($tipoQuarto, $numDias, $servicosAdicionais) {
    $precoDiario = 0;
    $taxaServicoAdicional = 0;
    switch ($tipoQuarto) {
        case 'simples':
            $precoDiario = 100.00;
            $taxaServicoAdicional = 50.00;
            break;
        case 'duplo':
            $precoDiario = 150.00;
            $taxaServicoAdicional = 70.00;
            break;
        case 'suite':
            $precoDiario = 200.00;
            $taxaServicoAdicional = 100.00;
            break;
        default:
            echo "Tipo de quarto inválido.";
            return 0;
    }

    // valor  da estadia
    $valorEstadia = $precoDiario * $numDias;

    // taxa de serviço adicional, se utilizou serviços adicionais
    if ($servicosAdicionais == 'sim') {
        $valorTotal = $valorEstadia + $taxaServicoAdicional;
    } else {
        $valorTotal = $valorEstadia;
    }

    return $valorTotal;
}
$tipoQuarto = 'duplo'; // Exemplo: tipo de quarto escolhido
$numDias = 5; // Exemplo: número de dias de estadia
$servicosAdicionais = 'sim'; // Exemplo: se utilizou serviços adicionais (sim ou não)
$valorTotal = calcularValorTotal($tipoQuarto, $numDias, $servicosAdicionais);

echo "Tipo de Quarto: " . ucfirst($tipoQuarto) . "<br>";
echo "Número de Dias de Estadia: " . $numDias . "<br>";
echo "Serviços Adicionais Utilizados: " . ucfirst($servicosAdicionais) . "<br>";
echo "Valor Total a Pagar: R$" . number_format($valorTotal, 2, ',', '.') . "<br>";
