<?php

require __DIR__ . '/../vendor/autoload.php';

use User\DockerPhpMysql\ContasTipo\ContaCorrente;
use User\DockerPhpMysql\Contratos\DadosContaBancariaInterface;
use User\DockerPhpMysql\Contratos\OperacoesContaBancariaInterface;

function executarOperacoes(OperacoesContaBancariaInterface $conta): void
{
    echo $conta->obterSaldo();
    echo PHP_EOL;

    echo $conta->depositar(50);
    echo PHP_EOL;
    
    echo $conta->obterSaldo();
    echo PHP_EOL;
    
    echo $conta->sacar(30);
    echo PHP_EOL;
    
    echo $conta->obterSaldo();
    echo PHP_EOL;
}

function exibirDados(DadosContaBancariaInterface $conta): void
{    
    echo "Banco: " . $conta->getBanco();
    echo PHP_EOL;
    
    echo "Ag./Conta: " . $conta->getNumeroAgencia() . "/" . $conta->getNumeroConta();
    echo PHP_EOL;

    echo "Titular: " . $conta->getNomeTitular();
    echo PHP_EOL;

    echo "--------------------------------------------";
    echo PHP_EOL;
}

$conta = new ContaCorrente(
    'Banco do Brasil', 
    'Eduardo Barbosa', 
    '8244',
    '57354-10', 
    0 
);

exibirDados($conta);
executarOperacoes($conta);