<?php
/*
try {
    echo "Executando" . PHP_EOL;
    throw new Exception('Excecão aqui');
} catch (Throwable $e){
    echo "Caindo no catch" . PHP_EOL;
    return;
} finally {
    echo "Finally" . PHP_EOL;
}
*/

function a(): int
{
    try {
        echo "Código";
        throw new Exception();
        return 0;
    } catch (Throwable $e){
        echo "Problema";
        return 1;
    } finally {
        echo "Final da função";
    }
}

a();