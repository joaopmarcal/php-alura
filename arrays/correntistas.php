<?php

declare(strict_types=1);

require_once "removeArray.php";

$correntistas_e_compras = [
  "Giovanni",
  "João",
  12,
  "Maria",
  25,
  "luis",
  "Luisa",
  "12",
  "Rafael",
];

var_dump($correntistas_e_compras);

ArrayUtils::remover(12,$correntistas_e_compras);

var_dump($correntistas_e_compras);