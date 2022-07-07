<?php

/** Questão sobre listas:
 * Declare uma lista de nomes (strings) de alunos, exemplo: João, Maria, Pedro e Ana.
 * Imprima os nomes através de uma estrutura de repetição. Na declaração do array experimente utilizar array()
 */

$nomes = array("João", "Maria", "Pedro", "Ana");

for ($indice = 0; $indice < count($nomes); $indice++) {
    echo $nomes[$indice] . PHP_EOL;
}
