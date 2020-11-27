<?php

  $idadeList = [21,23,19,25,30,41,18,53,'teste'];

  for ($i = 0;$i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
  }

  echo "--------------------" .PHP_EOL;

  $lista = array('João', 'Maria', 'Pedro','Ana');

  for ($i = 0; $i < count($lista);$i++){
    echo $lista[$i] . PHP_EOL;
  }