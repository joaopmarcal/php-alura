<?php

  $contasCorrentes = [
    "123.456.789-10" => [
      'titular' => 'João Paulo',
      'saldo' => 1800
    ],
    "123.456.789-11" => [
      'titular' => 'Maria',
      'saldo' => 10000
    ],
    "123.456.789-12" => [
      'titular' => 'Alberto',
      'saldo' => 300
    ]
  ];

  $contasCorrentes["123.456.789-13"] = [
    'titular' => 'Claudia',
    'saldo' => 2000
  ];

  foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . PHP_EOL;
    echo $conta['titular'] . PHP_EOL;
    echo $conta['saldo'] . PHP_EOL;
  }

  //challenge

  $placa['LMS-2312'] = [
    'marca' => 'VW',
    'modelo' => 'Golf'
  ];
