<?php

/**$conta1 = [
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

$contasCorrentes = [
    $conta1, //conta1 no indice 0
    $conta2, //conta2 no indice 1
    $conta3 //conta3 no indice 2
];

foreach ($contasCorrentes as $conta){ //Para cada uma das contas correntes chamando elas de conta
    echo $conta['titular'] . PHP_EOL; //Executo isso, exibindo o titular de cada uma delas
}**/

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

//adicionando mais dados

$contasCorrentes['123.258.789-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000

];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

/**foreach ($contasCorrentes as $cpf => $conta) { //Para cada uma das contas correntes chamando elas de conta
    echo $cpf . PHP_EOL; //Executo isso, exibindo o titular de cada uma delas
}**/

/**Para cada uma das contas correntes, pegando o indice de cada e passando ela para a variável cpf e pegando o valor de
 * cada e passando para a variável conta, execute esse loop;
 */