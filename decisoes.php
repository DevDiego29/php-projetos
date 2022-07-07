<?php

$idade = 29;
//$nome = 'Diego';

echo "Você só pode entrar a partir dos 18 anos." . PHP_EOL;

if ($idade >= 18) { //Se idade for maior ou igual a 18 anos

    echo "Você tem $idade anos;" . PHP_EOL;
    echo 'Pode entrar!';
} else {
    echo "Você só tem $idade anos. Você não pode entrar ";
}

echo PHP_EOL;
echo "Adeus!";

/* OBSERVAÇÕES:
 * OU pode ser representado tanto por or como pelo pape (ctrl + \) = ||
 * Sinais podem ser > (maior) < (menor) >= (maior ou igual) <= (menor ou igual)
 * e pode ser representado tanto pelo and como pelo &&
 */