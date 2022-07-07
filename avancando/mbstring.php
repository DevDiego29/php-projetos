<?php

$string = 'Testes de integração com PHP';

echo mb_strlen($string) .PHP_EOL; //Essa função conta o número de bits em uma string e não o número de caracteres
echo mb_strtoupper($string) . PHP_EOL;

//letras minúsculas comando: mb_strtolower(mb_strtoupper($string))

$convertida = mb_convert_encoding($string, to_encoding: 'ISO-8859-1',from_encoding: 'UTF-8');
echo $convertida . PHP_EOL;

echo mb_convert_case($string, MB_CASE_TITLE); //Todas as primeiras letras de cada palavra em maiúsculo
