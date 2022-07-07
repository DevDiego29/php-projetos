<?php

//Programa para gerenciar o dinheiro que entra e sai da conta bancária:

$debitos = array(); //Criar arrays para armazenamentos de créditos e débitos
$creditos = array();

array_push($debitos, 0.1); //Adicione esse valor no array débito
array_push($debitos, 0.2);

array_push($creditos, 0.3); //Adicione esse valor no array crédito

function saldo(array $creditos, array $debitos) // Criando uma função para consultar o meu saldo e exibí-lo na tela
{
    return array_sum($creditos) - array_sum($debitos);
}

echo saldo($creditos, $debitos); //Exibir na tela

//OBS: haverá uma imprecisão, pois a máquina trabalha com binários e não com decimal

/**$debitos = array();
$creditos = array();

array_push($debitos, 10); //Trocamos o valor 0.1 para 10, representando os centavos.
array_push($debitos, 20); //Fazemos a mesma coisa, trocando 0.2 para 20.

array_push($creditos, 30); //Trocamos o valor 0.3 para 30.

function saldo(array $creditos, array $debitos) {
    return array_sum($creditos) - array_sum($debitos);
}

$saldo = saldo($creditos, $debitos);

echo number_format($saldo, 2, ',', '.');**/

//A função number_format serve para exibir os centavos armazenados internamente de uma maneira correta na tela.

?>
