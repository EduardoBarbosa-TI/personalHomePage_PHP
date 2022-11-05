<?php

declare(strict_types=1);

use ContaBancaria as GlobalContaBancaria;

 class ContaBancaria
 {
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldo
    ) {
        $this-> banco = $banco;
        $this-> nomeTitular = $nomeTitular;
        $this-> numeroAgencia = $numeroAgencia;
        $this-> numeroConta = $numeroConta;
        $this-> saldo = $saldo;  
    }


    public function obterSaldo(): string
    {
        return 'Seu saldo atual é: R$ ' . $this -> saldo;
    }

    public function depositar(float $valor): string
    {
        $this-> saldo += $valor;
        return 'Depósito de R$ ' . $valor . ' realizado!';
    } 

    public function sacar(float $valor): string
    {
        $this ->saldo -= $valor;
        return 'Saque de R$ ' . $valor . ' realizado!';
    }
 }

 $conta1 = new GlobalContaBancaria(
    'Banco Santander',
    'Eduardo Barbosa',
     '25346',
    '456457-62',
    0
 );


 $conta2 = new GlobalContaBancaria(
    'Banco do Brasil',
    'Eduardo Barbosa',
    '25346',
    '456457-62',
    0
 );

//  var_dump($conta1);
//  var_dump($conta2);

// echo $conta1->obterSaldo();

// echo PHP_EOL;

// echo $conta1>depositar(300.00);
 
// echo PHP_EOL;

// echo $conta1->obterSaldo();

// echo PHP_EOL;

// echo $conta1->sacar(150.00);

// echo PHP_EOL;

// echo $conta1->obterSaldo();
 ?>

