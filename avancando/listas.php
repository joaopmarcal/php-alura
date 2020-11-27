<?php

  $idadeList = [21,23,19,25,30,41,18];

  list($idadeVinicius, $idadeJoao,$idadeMaria) = $idadeList;

  unset($idadeList[4]);

  $idadeList[] = 20;

  echo $idadeVinicius . PHP_EOL;
  echo $idadeJoao . PHP_EOL;
  echo $idadeMaria . PHP_EOL;

  foreach ($idadeList as $key => $idade){
    echo $key .PHP_EOL;
    echo $idade .PHP_EOL;
  }