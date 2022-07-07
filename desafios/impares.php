<?php

//Programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100

/**for ($contador = 1; $contador < 100; $contador++) {
    if ($contador % 2 != 0) {
        echo $contador . PHP_EOL;
    }
} **/

 /**
  * Inicializo meu contador com 1, verifico a condição, executo o loop, após a executação vai incrementar ao contador;
  * Se dividindo o contador por 2, o resto for diferente de 0, eu irei exibir na tela
  */

for ($i = 1; $i <100; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . PHP_EOL;
}

/**
 *  for (....) temos um laço de repetição - parte do código que exibe a depender da condição
 *  if .... e temos logo em seguida uma condição - só será exibido se for impar
 */