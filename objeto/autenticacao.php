<?php

  use Alura\Banco\Modelo\Cpf;
  use Alura\Banco\Modelo\Endereco;
  use Alura\Banco\Modelo\Funcionario\{Diretor,Gerente};
  use Alura\Banco\Modelo\Conta\{Titular};
  use Alura\Banco\Service\Autenticador;

  require_once "autoload.php";

  $autenticador = new Autenticador();
  $umDiretor = new Titular(
    new Cpf('123.456.789-10'),
    'João da Silva',
    new Endereco('','','','')
  );

  $autenticador->tentaLogin($umDiretor,'abcd');