<?php

set_error_handler(function ($errno,$errstr,$errfile,$errline){
   //var_dump($errno,$errstr,$errfile,$errline);
    switch ($errno){
        case E_WARNING:
            echo "Aviso: isso é perigoso";
            break;
        case E_NOTICE:
            echo "Melhor não fazer isso";
            break;
    }
   return true;
});

echo $variavel;

echo @$array[12];

echo CONSTANTE;