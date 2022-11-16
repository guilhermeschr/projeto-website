<?php

function compara_numeros($num1,$num2){
    if ($num1>$num2){
        echo 'O primeiro valor ('.$num1.') é maior que o segundo valor('.$num2.').';
    }
    if ($num1<$num2) {
        echo 'O primeiro valor ('.$num1.') é menor que o segundo valor('.$num2.').';

    }
    if ($num1==$num2){
        echo 'O primeiro valor ('.$num1.') é igual o segundo valor('.$num2.').';

    }

}
compara_numeros(30,30);