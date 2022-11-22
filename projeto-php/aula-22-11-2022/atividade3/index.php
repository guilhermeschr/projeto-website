<?php

// 3. Crie uma função PHP que receba um número
// e imprima os números em sequência seguidos por
// um traço (o último número não deve conter traço).
// Exemplo: 1-2-3-4-5-6-7-8-9-10, sendo passado 10
// como parâmetro neste caso

function sequencia($numero){
    for($i=0;$i<10;$i++){
        echo $numero;
        $numero=$numero+1;
        if($i==9){
            break;
        }
        echo '-';
    }
}

echo '<h1>10 números seguidos:</h1>';
sequencia(1);
