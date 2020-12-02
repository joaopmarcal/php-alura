<?php

namespace Alura\Banco\Service;

use Alura\Banco\modelo\Autenticavel;

class Autenticador {

  public function tentaLogin(Autenticavel $autenticavel, string $senha): void {
    if ($autenticavel->podeAutenticar($senha)){
      echo "Ok. Usuário logado no sitema";
    } else {
      echo "Ops. Senha Incorreta.";
    }
  }

}