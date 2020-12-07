<?php

ini_set('display_errors', 1);

function funcao1(){
    echo "entrei na função 1" . PHP_EOL;
    try {
        funcao2();
        //$divisao = intdiv(5,0);
        $arrayFixo = new SplFixedArray(2);
        $arrayFixo[3] = 'Valor';
    } catch (Throwable $problema){
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;

    }
    echo "saindo da função 1" . PHP_EOL;
}

function funcao2(){
    echo "Entrei na função 2" . PHP_EOL;
    intdiv(1,0);
    throw new BadFunctionCallException('Essa é a mensagem de exceção');

    echo "Saindo da função 2" . PHP_EOL;
}

echo "iniciando o Programa principal". PHP_EOL;
funcao1();
echo "Finalizando o programa principal" . PHP_EOL;