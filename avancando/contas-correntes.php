<?php

  $conta1 = [
    'titular' => 'João Paulo',
    'saldo' => 1800
  ];

  $conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
  ];

  $conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
  ];

  $contasCorrentes = [$conta1,$conta2,$conta3];

  for ($i = 0;$i < count($contasCorrentes);$i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
    echo $contasCorrentes[$i]['saldo'] . PHP_EOL;
  }

  print_r($contasCorrentes);