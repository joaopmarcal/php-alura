<?php

  class Conta {

    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
      $this->titular = $titular;
      $this->saldo = 0;

      Conta::$numeroDeContas++;
    }

    public function __destruct()
    {
      if (self::$numeroDeContas > 2){
        echo "Há mais de uma conta ativa";
      }
      self::$numeroDeContas--;
    }

    public function getSaldo(): float
    {
      return $this->saldo;
    }

    public function sacar(float $valorASacar){
      if ($valorASacar > $this->saldo){
        echo "Saldo Indisponível" . PHP_EOL;
      } else {
        $this->saldo -= $valorASacar;
      }
    }

    public function depositar(float $valorADepositar):void{
      if ($valorADepositar < 0){
        echo "Valor precisa ser positivo";
      } else {
        $this->saldo += $valorADepositar;
      }
    }

    public function transferir(float $valorATransferir, Conta $contaDestino):void
    {
      if ($valorATransferir > $this->saldo){
        echo "Saldo indisponível";
      } else {
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
      }
    }

    public function recuperaNomeTitular(): string {
      return $this->titular->recuperaNome();
    }

    public function recuperaCPFTitular(): string {
      return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas():int{
      return self::$numeroDeContas;
    }

  }