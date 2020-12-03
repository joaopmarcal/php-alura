<?php

$nomes = "Giovanni, João, Maria, Pedro";

$arrayNomes = explode(',',$nomes);

foreach ($arrayNomes as $arrayNome){
  echo "<p>Olá $arrayNome</p>";
}

$nomeJuntos = implode(',',$arrayNomes);
var_dump($nomeJuntos);