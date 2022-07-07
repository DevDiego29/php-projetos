<?php

//Tipos de arrays: numéricos e associativos

//$array = [1, 2, 3, 4];
//$array = array(1, 2, 3);

//Nos arrays associativos, as chaves precisam ser um int ou string
$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'três'
];

/**$contator = 0;
 * //Para cada item do meu array receberá o nome de $nomeNumero, exiba eles e pule uma linha
 * foreach($array as $numeral => $nomeNumero) {
 * echo " $numeral em português é: $nomeNumero" . PHP_EOL;
 * $contator++;
 * }
 * echo "Total:$contator ". PHP_EOL;*/

foreach ($array as $numeral => $nomeNumero) {
    echo " $numeral em português é: $nomeNumero" . PHP_EOL;

}
echo "Total: " . count($array) . PHP_EOL;

//echo "Total: ". sizeof($array). PHP_EOL;