<?php

function IMC($peso,$altura){
    $imc =  $peso/($altura*$altura);
    $mensage = " ";
    echo '<h2>IMC '.  $imc .'</h2>';


    switch($imc){
        case $imc<20:
            $mensage ='Abaixo do peso';
            break;
        case $imc>20 && $imc<=25:
            $mensage ='Peso Normal';
            break;
        case $imc>25 && $imc<=30:
            $mensage ='Sobre Peso';
            break;
        case $imc>30 && $imc<=40:
            $mensage ='Obeso';
            break;
        case $imc>40:
            $mensage ='Obeso Mórbito';
            break;

    }

    // if($imc<=20){
    //     echo 'Abaixo do peso';
    // }else if($imc>20 && $imc<=25){
    //     echo 'Peso Normal';
    // }else if($imc>25 && $imc<=30 ){
    //     echo 'Sobre Peso';
    // }else if($imc<20){
    //     echo '
    //     Obeso';
    // }else if($imc<20){
    //     echo 'Abaixo do peso';
    // }
    echo $mensage;


}

IMC(80,1.70);

