<?php

  namespace Alura\Banco\Modelo;

  final class Cpf {

    private $cpf;

    public function __construct(string $numero){
      $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
        'options' => [
          'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
        ]
      ]);
      if ($numero === false) {
        // lançar uma exceção
        echo "Cpf inválido";
        exit();
      }
      $this->cpf = $numero;
    }

    public function recuperaCpf()
    {
      return $this->cpf;

    }

  }