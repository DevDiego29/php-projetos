<?php

$notas = [
    'Ana' => 10,
    'José' => 9,
    'Diego' => 8,
    'Alicia' => 7,
    'Mario' => 6
];

//sort($notas); ordena as notas de forma crescente
//rsort($notas); //ordena as notas de forma decrescente
//arsort($notas);
ksort($notas); //ordena apartir das chaves
var_dump($notas);

