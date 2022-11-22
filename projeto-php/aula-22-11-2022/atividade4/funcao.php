<?php

// 4. Faça com que o número passado para a função
//  do exercício anterior venha de um formulário HTML.

function sequencia($num){
    $num=0;
if(isset($_GET["numero"])){

    $num = $_GET["numero"];

    $numero=$num;

    for($i=0;$i<10;$i++){
        echo $numero;
        $numero=$numero+1;
        if($i==9){
            break;
        }
        echo '-';
    }
}

}
