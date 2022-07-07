<?php

// TABUADA:

$multiplicador = 3;

for ($i = 1; $i < 10; $i++) {
    echo "$multiplicador x $i = " . $multiplicador * $i . PHP_EOL;
}

// Outras soluções:

$multiplicador = 3;

for ($i = 1; $i < 10; $i++) {
    $resultado = $multiplicador * $i;
    echo "$multiplicador x $i = $resultado" . PHP_EOL;
}
