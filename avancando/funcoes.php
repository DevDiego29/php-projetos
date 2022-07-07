<?php

//Arquivo de funções

//Segundo: Criei uma função que imprime uma mensagem

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

//Quarto: Criei uma função para depositar dinheiro na conta;

function depositar(array $conta, float $valorADepositar): array //Quero depositar em uma conta um valor
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar; //nessa conta, no saldo, deposite um valor x
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

//Quinto: Criando a função sacar;

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);

}

