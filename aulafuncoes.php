<?php
$numero1 = 10;
$numero2 = 20;
$operador = '/';

function calcular($numero1,$numero2,$operador){
    switch ($operador) {
        case '+':
            $resultado = $numero1 + $numero2;
            break;
        case '-':
            $resultado = $numero1 - $numero2;
            break;
        case '*':
            $resultado = $numero1 * $numero2;
            break;
        case '/':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado =  "Divisão por zero";
            }
            break;
        default:
            $resultado = "Operador invalido";
            break;
    }
    return $resultado;
}

echo "ola mundo esse é meu segundo teste de uma função <br>";
echo "O primeiro numero da operação é: {$numero1}.<br>O segundo numero da operação é: {$numero2}.<br>A operação usada é: $operador <br>";
echo "Resultado: " . calcular($numero1, $numero2, $operador) . "<br>"; // retorna a função
?>
