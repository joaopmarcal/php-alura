<?php

  require_once "autoload.php";

  use Alura\Banco\Service\ControladorDeBonificacoes;
  use Alura\Banco\Modelo\{Cpf};
  use Alura\Banco\Modelo\Funcionario\{Gerente,Diretor,Desenvolvedor,EditorVideo};

  $umFuncionario = new Desenvolvedor(
    'João Paulo',
    new Cpf('123.456.789-10')
    , 1000);

  $umFuncionario->sobeDeNivel();
  $umFuncionario->recuperaSalario();

  $umaFuncionaria = new Gerente(
    'João',
    new Cpf('987.456.789-10')
    , 3000);

  $umaFuncionario = new Diretor(
    'Adriano',
    new Cpf('987.654.789-10')
    , 5000);

  $umEditor = new EditorVideo(
    'Paulo',
    new Cpf('987.654.987-10')
    , 1500);

  $controlador = new ControladorDeBonificacoes();
  $controlador->adicionaBonificacaoDe($umFuncionario);
  $controlador->adicionaBonificacaoDe($umaFuncionaria);
  $controlador->adicionaBonificacaoDe($umaFuncionario);
  $controlador->adicionaBonificacaoDe($umEditor);

  echo $controlador->recuperaTotal();