<?php

/**
 * include: pode ser chamada como se fosse uma função, passando como parâmetro o nome do arquivo que será
 * incluído
 *
 * require: incluindo arquivos obrigatórios, usamos a estrutura de linguagem require
 *
 * require_once
 */

require_once ('funcoes.php');

//Primeiro: Declarando um array associativo com 3 contas;

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];


//Sexto: Usando as funções sacar e depositar

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

//Terceiro: Criei um Laço para imprimir o cpf, titular e saldo de cada conta:

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}

