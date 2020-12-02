<?php

  namespace Alura\Banco\Modelo\Funcionario;

  use Alura\Banco\Modelo\{Cpf,Pessoa};

  abstract class Funcionario extends Pessoa{

    private $salario;

    public function __construct(string $nome,CPF $cpf, float $salario)
    {
      parent::__construct($nome,$cpf);
      $this->cargo = $cargo;
      $this->salario = $salario;
    }

    public function alteraNome(string $nome):void {
      $this->validaNomeTitular($nome);
      $this->nome = $nome;
    }

    public function recuperaSalario(): float {
      return $this->salario;
    }

    public function recebeAumento(float $valorAumento): void {
      if ($valorAumento < 0){
        echo "aumento deve ser positivo";
        return;
      }

      $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao(): float;

    public function podeAutenticar(string $senha):bool {
      return $senha === '4321';
    }

  }