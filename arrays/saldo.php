<?php

  $saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000,
  ];

  foreach ($saldos as $saldo){
    echo "<p>$saldo</p>";
  }

  sort($saldos);

  echo "Menor saldo: $saldos[0]";