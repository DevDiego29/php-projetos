<?php

/**Array ou "vetor".
 * Conceito: São Sequências de informações normalmente do mesmo tipo
 * Para acessar alguma informação dentro da lista eu uso as chaves []
**/

/**$idadeList = [21,23,30,28,29,18];
$umaIdade = $idadeList[3];

echo $umaIdade;**/

/**
 * Como saber quantos itens eu tenho em uma determinada lista Basta usar o comando count
 * echo count($idadeList);
 */

/**$idadeList = [21,23,30,28,29,18];
echo count($idadeList);**/

//adicionando mais itens a minha lista

$idadeList = [21, 23, 19, 25, 30, 41, 18];

$idadeList[7] = 20;

foreach ($idadeList as $idade) { //para cada uma das idades da minha lista eu vou chamar de idade e irei exibir
    echo $idade . PHP_EOL;
}

