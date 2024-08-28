<?php


function iniciarloop($numeroInicial, $limite, $excecao)
{
    for ($i = $numeroInicial; $i <= $limite; $i++) {
        if ($i == $excecao) {
            return true; // Retorna verdadeiro se encontrar a exceção
        }
    }
    return false; // Retorna falso se a exceção não for encontrada
}

// valor de cada parâmetro
$numeroInicial = 1;
$limite = 10;
$excecao = 5;

// Chama a função para iniciar o loop e armazena o resultado
$resultado = iniciarloop($numeroInicial, $limite, $excecao);

// Exibe o resultado
if ($resultado) {
    echo "Exceção encontrada dentro do intervalo.";
} else {
    echo "Exceção não encontrada dentro do intervalo.";
}
echo "<br>";

// Função auxiliar para verificar se um número é par
function ehPar($numero)
{
    return $numero % 2 == 0;
}

// Função auxiliar para verificar se um número é primo
function ehPrimo($numero)
{
    if ($numero <= 1) {
        return false;
    }
    if ($numero == 2) {
        return true;
    }
    if ($numero % 2 == 0) {
        return false;
    }
    $sqrt = sqrt($numero);
    for ($i = 3; $i <= $sqrt; $i += 2) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Função auxiliar para verificar se um número é múltiplo de um divisor dado
function ehMultiplo($numero, $divisor)
{
    return $numero % $divisor == 0;
}

// Função para realizar todas as verificações dentro de um intervalo
{

}
function realizarVerificacoes($numeroInicial)
{
    // Loop through each number starting from $numeroInicial
    for ($i = $numeroInicial; $i <= 10; $i++) {
        $paridade = ehPar($i);
        $primalidade = ehPrimo($i);
        $multiplo_de_3 = ehMultiplo($i, 3);
        $multiplo_de_5 = ehMultiplo($i, 5);
        $multiplo_de_3_e_5 = ehMultiplo($i, 3) && ehMultiplo($i, 5);

        // Exibir os resultados das verificações
        echo "Número $i:<br>";
        echo "É par: " . ($paridade ? 'Sim' : 'Não') . "<br>";
        echo "É primo: " . ($primalidade ? 'Sim' : 'Não') . "<br>";
        echo "É múltiplo de 3: " . ($multiplo_de_3 ? 'Sim' : 'Não') . "<br>";
        echo "É múltiplo de 5: " . ($multiplo_de_5 ? 'Sim' : 'Não') . "<br>";
        echo "É múltiplo de 3 e 5: " . ($multiplo_de_3_e_5 ? 'Sim' : 'Não') . "<br>";
        echo "<br>";
    }
}

realizarVerificacoes ($numeroInicial);

