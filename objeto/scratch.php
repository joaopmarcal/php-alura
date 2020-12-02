<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

require_once "autoload.php";

$desenvolvedor = new Desenvolvedor('João', new Cpf('123.456.789-10'),2000);
echo $desenvolvedor->nome;
