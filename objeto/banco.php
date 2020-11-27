<?php

  require_once "src/Conta.php";
  require_once "src/Titular.php";
  require_once "src/Cpf.php";

  $joaoPaulo = new Titular(new Cpf('123.456.789-10'), 'João Paulo');
  $conta = new Conta($joaoPaulo);
  var_dump($conta);
  echo $conta->recuperaCPFTitular() .PHP_EOL;
  echo $conta->recuperaNomeTitular() .PHP_EOL;
  echo $conta->getSaldo() .PHP_EOL;

  $joao = new Titular(new Cpf('123.456.789-11'), 'João');
  $contaDois = new Conta($joao);
  var_dump($conta);
  echo $contaDois->recuperaCPFTitular() .PHP_EOL;
  echo $contaDois->recuperaNomeTitular() .PHP_EOL;
  echo $contaDois->getSaldo() .PHP_EOL;

  echo Conta::recuperaNumeroDeContas();

  exit('fim do programa');


  $conta->cpfTitular = '12345678910';
  $conta->nomeTitular = 'João Paulo';
  $conta->depositar(500);

  var_dump($conta);

  $contaDois = new Conta();
  $contaDois->depositar(300);
  var_dump($contaDois);

  $conta->transferir(1200,$contaDois);

  var_dump($conta);
  var_dump($contaDois);