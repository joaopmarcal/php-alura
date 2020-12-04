<?php

require_once "removeArray.php";

$correntistas = [
  'Giovanni',
  'João',
  'Maria',
  'Luis',
  'Luisa',
  'Rafael'
];

$correntistasNaoPagantes = [
  'Luis',
  'Luisa',
  'Rafael'
];

$correntistasPagantes =  array_diff($correntistas,$correntistasNaoPagantes);

var_dump($correntistasPagantes);

echo "---------------------------" .PHP_EOL;

$correntistas = [
  'Giovanni',
  'João',
  'Maria',
  'Luis',
  'Luisa',
  'Rafael'
];

$saldos = [
  2500,
  3000,
  4400,
  1000,
  8700,
  9000
];

$relacionados = array_combine($correntistas, $saldos);

$relacionados['matheus'] = 4500;

foreach ($relacionados as $key => $relacionado){
  echo "<p>O salario de $key é de $relacionado</p>";
}

//var_dump($relacionados);
/*
if (!array_key_exists("joao",$relacionados)){
  echo "não existe";
}
*/

//var_dump(array_key_exists("João",$relacionados));

$results = ArrayUtils::encontrarPessoasComSaldoMaior(10000,$relacionados);
var_dump($results);