<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

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
$conta->sacar(100);
echo $conta->getSaldo();