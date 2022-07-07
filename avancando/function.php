<?php

//Explicação sobre funções
//Exemplo 1:

function adiciona2($x)
{
    return $x + 2;
}

$sete = adiciona2(5);
echo $sete . PHP_EOL;

/**
 * Ao chamarmos uma função que eu nomeei como sendo adiciona2 e passo pra ela um parâmetro/valor 5, e depois de
 * executar o resultado dessa função será o x + 2.
 */

//Exemplo 2:

function adiciona3($x)
{
    return $x + 2;
}

$resultado = adiciona3(10);
echo $resultado;

/**
 * Ao chamarmos uma função que eu nomeei como sendo adiciona2 e passo pra ela um parâmetro/valor 10, e depois de
 * executar o resultado dessa função será o x + 2.
 */