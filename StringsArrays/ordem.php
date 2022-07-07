<?php

$notas = [
    10,
    9,
    8,
    7
];

$notasOrdenadas = $notas; //"copiando o que está nessa variável para outra variável"
sort($notasOrdenadas); //função que serve para ordenar um array/lista

echo 'Desordenadas:';
var_dump($notas);

echo 'Ordenadas:';
var_dump($notasOrdenadas);