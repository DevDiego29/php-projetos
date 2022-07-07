<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado ". PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} elseif ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado (a), então pode entrar.";
} else {
    echo "Você tem $idade anos. Você não pode entrar.";
}

/*if ($idade >= 18){
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else {
    if ($idade >= 16 && $numeroDePessoas > 1){
        echo "Você tem $idade anos, está acompanhado (a), então pode entrar.";
    } else {
        echo "Você tem $idade anos. Você não pode entrar.";
    }
} */

/* OBSERVAÇÕES:
 * Quando o bloco é composto de uma única linha de instrução, não precisamos utilizar as chaves.
 *O PHP também permite a utilização de elseif, tudo junto, chegando ao mesmo resultado
 */

echo PHP_EOL;
echo "Adeus!";
