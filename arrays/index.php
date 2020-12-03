<?php

require_once 'Calculadora.php';

$notas = [9,3,10,5,10,8];
//$notas = [];

$calculadora = new Calculadora();
$media = $calculadora->CalculaMedia($notas);

if($media){
  echo "A média é: $media";
} else {
  echo "Não é possivel calcular a média";
}

