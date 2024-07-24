<?php
// taxa de manutenção
function calcularTaxaManutencao($tamanhoApartamento, $utilizaAreasComuns) {
    // Definição das taxas base e adicionais
    $taxaBasica = 0;
    $taxaAdicional = 0;

    if ($tamanhoApartamento <= 50) {
        $taxaBasica = 100.00;
        $taxaAdicional = $utilizaAreasComuns == 'sim' ? 50.00 : 0;
    } elseif ($tamanhoApartamento > 50 && $tamanhoApartamento <= 100) {
        $taxaBasica = 150.00;
        $taxaAdicional = $utilizaAreasComuns == 'sim' ? 70.00 : 0;
    } elseif ($tamanhoApartamento > 100) {
        $taxaBasica = 200.00;
        $taxaAdicional = $utilizaAreasComuns == 'sim' ? 100.00 : 0;
    } else {
        echo "Tamanho de apartamento inválido.";
        return 0;
    }
    $taxaTotal = $taxaBasica + $taxaAdicional;
    return $taxaTotal;
}
$tamanhoApartamento = 80; // Exemplo: tamanho do apartamento em m²
$utilizaAreasComuns = 'sim'; // Exemplo: se utiliza áreas comuns (sim ou não)

$taxaManutencao = calcularTaxaManutencao($tamanhoApartamento, $utilizaAreasComuns);

echo "Tamanho do Apartamento: " . $tamanhoApartamento . " m²<br>";
echo "Utiliza Áreas Comuns: " . ucfirst($utilizaAreasComuns) . "<br>";
echo "Taxa de Manutenção: R$" . number_format($taxaManutencao, 2, ',', '.') . "<br>";
