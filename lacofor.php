<?php
echo "Multiplos de 3 :\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo "$i\n";
    }}
echo "<br>";

echo "Uma das condição :\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0 || $i % 5 == 0) {
        echo "$i\n";
    }}
echo "<br>";

echo "As duas condições :\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0 && $i % 5 == 0 ) {
        echo "$i\n";
    }
}