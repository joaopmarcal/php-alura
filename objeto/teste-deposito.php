<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente,Titular};
use Alura\Banco\Modelo\{Cpf,Endereco};

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new Cpf('123.456.789-10'),
        'João Paulo',
        new Endereco('cidade','bairro','rua','numero')
    )
);

try {
    $contaCorrente->depositar(-100);
} catch (InvalidArgumentException $exception){
    echo "Valor a depositar precisa ser positivo, seu hacker perigoso";
}
