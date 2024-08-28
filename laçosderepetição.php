
<?php
for ($i =1; $i <= 100; $i++) {                  // $i++ iterando variavel a $i
    if ($i % 5 == 0 && $i % 3 == 0 )
    {                          // laço for inicia $i= 1
        echo "$i\n";
    }
}
echo "<hr>";
// desafio 2
$cond = 0;
while($cond <= 100){


    if ($cond == 40){
        break;
    }
    $cond++;
}

$inc = 1;
$dec  = 1;
$dec--;
--$dec;
++$inc;


$inc = $inc +1;

$nomes = array("joão", "maria", "pedro","ana", "lucas");
foreach ($nomes as $nome) {
    strtoupper ($nome)."\n";
    echo "$nome\n";
}


if (1==2 || 2==2){
    echo "uma das condiçoes";
}

if (1==2 && 2==2){
    echo " as duas condiçoes";
}