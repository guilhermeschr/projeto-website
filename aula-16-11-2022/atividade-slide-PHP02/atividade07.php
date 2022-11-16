<?php

function IMC($peso,$altura){
    $imc =  $peso/($altura*$altura);
    echo '<h2>IMC '.  $imc .'</h2>';

    if($imc<=20){
        echo 'Abaixo do peso';
    }
    if($imc>20 && $imc<=25){
        echo 'Peso Normal';
    }
    if($imc>25 && $imc<=30 ){
        echo 'Sobre Peso';
    }
    if($imc<20){
        echo '
        Obeso';
    }
    if($imc<20){
        echo 'Abaixo do peso';
    }


}

IMC(80,1.70);