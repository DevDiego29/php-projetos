<?php

/**
 * Arrays associativos: é uma espécie de mapa na qual podemos associar um nome/índice a determinado valor.
 * Esse índice pode ser numérico, ou pode ser definido de outra forma - por exemplo, criando uma string titular ou
 * saldo.
 */

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
