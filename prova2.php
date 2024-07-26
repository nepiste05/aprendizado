<?php
$numerointeiro = 20;
$numerofloat= 6.24;
$texto = "Prova 2!";
$boleano = true;

function verificarnumero($numero){
    if ($numero >0){
        echo " O numero é positivo.<br>";
    }elseif ($numero < 0){
        echo "O numero é negativo.<br>";
    }else{
        echo "O numero é zero.<br>";
    }
}
verificarnumero($numerointeiro);
verificarnumero(-10);
verificarnumero(0);

for ($i =10; $i <= 10 ; $i++) {
    echo "Contagem $i<br>";
}

$listanumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];
function somarelementos ($lista){
    $soma =0;
    foreach ($lista as $elementos){
        $soma += $elementos;
    }
    return $soma;
}
echo "Soma dos elementos da lista:". somarelementos($listanumeros)."<br>";

function calcularfatorial($n){
    if ($n == 0 || $n == 1){
        return 1;
    }else{
        return $n * calcularfatorial($n-1);
    }
}

$numerofatorial =5;
echo "Fatorial de numero para fatorial:".calcularfatorial($numerofatorial)."<br>";

function verificarprimo($numero){
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt ($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

$numeroverificar = 7;
if (verificarprimo($numeroverificar)) {
    echo "$numeroverificar é um numero primo" . "<br>";
}else{
    echo "$numeroverificar náo é um numero primo" . "<br>";
}