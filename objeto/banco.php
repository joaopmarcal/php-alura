<?php

require_once 'autoload.php';

  use Alura\Banco\Modelo\Conta\Titular;
  use Alura\Banco\Modelo\Endereco;
  use Alura\Banco\Modelo\Cpf;
  use Alura\Banco\Modelo\Conta\Conta;

  $funcionario = new Funcionario('Tesla', new CPF('123.456.789-13'), 'Desenvolvedor');
  var_dump($funcionario);

  $endereco = new Endereco("São Paulo","bairro","av aguia", "1000");
  $joaoPaulo = new Titular(new Cpf('123.456.789-10'), 'João Paulo',$endereco);
  $conta = new Conta($joaoPaulo);
  var_dump($conta);
  echo $conta->Titular->Cpf->recuperaCPFTitular() .PHP_EOL;
  echo $conta->recuperaNomeTitular() .PHP_EOL;
  echo $conta->getSaldo() .PHP_EOL;

  $patricia = new Titular(new Cpf('123.456.789-11'), 'Patricia',$endereco);
  $contaDois = new Conta($patricia);
  var_dump($conta);
  echo $contaDois->recuperaCPFTitular() .PHP_EOL;
  echo $contaDois->recuperaNomeTitular() .PHP_EOL;
  echo $contaDois->getSaldo() .PHP_EOL;

  echo Conta::recuperaNumeroDeContas();

  $enderecoDois = new Endereco("a","b","c", "d");
  $joao = new Titular(new Cpf('123.456.789-12'), 'João',$enderecoDois);
  $conta = new Conta($joao);
  var_dump($conta);
  echo $conta->recuperaCPFTitular() .PHP_EOL;
  echo $conta->recuperaNomeTitular() .PHP_EOL;
  echo $conta->getSaldo() .PHP_EOL;

  exit('fim do programa');