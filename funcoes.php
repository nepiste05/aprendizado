<?php
function substituirVogais($texto) {
    $vogais = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    $textoSubstituido = str_replace($vogais, '*', $texto);
    return $textoSubstituido;
}
$strtextopadrao= "ola mundo, esse é meu primeiro teste de uma função";
echo "$strtextopadrao<br>";
echo substituirVogais($strtextopadrao);
