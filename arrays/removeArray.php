<?php

  class ArrayUtils {

    public static function remover(string $elemento, array &$array): void {
      $posicao = array_search($elemento, $array, true);
      if (is_int($posicao)){
        unset($array[$posicao]);
      } else {
        echo "Elemento não encontrado no Array";
      }
    }

    public static function encontrarPessoasComSaldoMaior(int $saldo,array $array):array {

      $correntistaComSalsoMaior = array();
      foreach ($array as $chave => $valor) {
        if ($valor > $saldo){
          $correntistaComSalsoMaior[] = $chave;
        }
      }
      if (!array_key_exists($correntistaComSalsoMaior)){
        return array('nenhum valor retornado do banco');
      }
      return $correntistaComSalsoMaior;

    }

  }