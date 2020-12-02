<?php

use Alura\Banco\Modelo\Endereco;

require_once "autoload.php";

$umEndereco = new Endereco('Petrópolis','meu bairro','minha rua','1200');
$outroEndereco = new Endereco('Rio','centro','Uma rua ai','50');

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;

echo $outroEndereco->bairro . PHP_EOL;
$outroEndereco->__set('bairro','jardim') . PHP_EOL;
echo $outroEndereco . PHP_EOL;
