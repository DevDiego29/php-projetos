<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

/**function ordenaNotas(array $nota1, array $nota2): int
{
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }

    return 0;
}*/

function ordenaNotas(array $nota1, array $nota2): int
{
    return $nota1['nota'] <=> $nota2['nota'];
}

usort($notas, callback: 'ordenaNotas' ); //parâmetros(array que irá ordenar e uma função de callback que eusina como ela irá retornar
var_dump($notas);

//obs: retornará de maneira crescente, caso eu queira descrecente é so inverter