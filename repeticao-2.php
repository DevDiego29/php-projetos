<?php

for ($contador = 1; $contador <= 15; $contador++) {
    echo "#$contador" . PHP_EOL;
}

/** Interpretado o código:
 *  1 - Inicia-se o contador;
 *  2 - Verifica a condição, após a verificação ele executa o código;
 *  3 - entra no loop: verifica, executa, repete, verifica, executa e repete, ...
 */

/** Outras formas:
 * $contador += 1; (contador recebe ele mesmo + 1)
 * $contador ++; (nesse contador adiciona ou incrementa + 1)
 */

/**
 * Para inicializando-se o nosso contador com 1, verifica-se se ele é <= 15, se for executa-se o código.
 * Depois de executar, incrementa-se o contador.
 * Depois de incrementar, verifica-se novamente e executa o código, até chegar o momento de retornar false.
 */