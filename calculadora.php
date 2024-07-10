<?php

$numero1 = 9;
$numero2 = 0;
$operador = '/';

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
            $resultado = 'Erro: Divisão por zero.';
        }
        break;
    default:
        $resultado = 'Operador inválido';
}

echo "O resultado é:" . $resultado; "<br>";
