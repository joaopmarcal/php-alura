<?php

  $altura = 1.69;
  $peso = 71.0;

  $imc = $peso / ($altura ** 2);

  echo "Seu IMC é de $imc. Você está com o IMC." . PHP_EOL;

  if ($imc < 18.5){
    echo "Abaixo do peso";
  } elseif ($imc >= 18.5 && $imc <= 24.9){
    echo "Peso normal";
  } elseif ($imc >= 25 && $imc <= 29.9){
    echo "Sobrepeso";
  } elseif ($imc >= 30 && $imc <= 34.9){
    echo "Obesidade grau 1";
  } elseif ($imc >= 35 && $imc <= 39.9){
    echo "Obesidade grau 2";
  } else {
    echo "Obesidade grau 3";
  }