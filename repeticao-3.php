<?php

/**for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) { //Se o nosso contador for diferente de 13 continue
        continue;
    }

    echo "#$contador" . PHP_EOL;
} **/

//Se o contador for igual a 13 ele pula e continua na próxima interação

for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) { //Se o nosso contador for diferente de 13, pare!!
        break;
    }

    echo "#$contador" . PHP_EOL;
}
