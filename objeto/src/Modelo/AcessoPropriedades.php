<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades {

  public function __get(string $name)
  {
    $metodo = 'recupera' . ucfirst($name);
    return $this->$metodo();
  }

}