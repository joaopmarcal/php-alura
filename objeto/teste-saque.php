<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca,ContaCorrente,Titular};
use Alura\Banco\Modelo\{Cpf,Endereco};
use Alura\Banco\Modelo\Conta\SaldoInsuficienteException;

require_once "autoload.php";

$conta = new ContaCorrente(
  new Titular(
    new CPF('123.456.789-10'),
    'João Paulo',
    new Endereco('Petrópolis','Bairro Teste', 'Rua lá', '37')
  )
);

//$conta->transferir(200);
$conta->depositar(500);
try {
    $conta->sacar(600);
} catch (SaldoInsuficienteException $exception){
    echo "Você, não tem saldo para realizar este saque." . PHP_EOL;
    echo $exception->getMessage();
}
echo $conta->getSaldo();