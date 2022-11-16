<?php

function par_ou_impar($num){
    if($num%2==0){
        echo '<h2>Esse número é par.</h2>';
    }else{
        echo '<h2>Esse número é impar.</h2>';
    }
}

par_ou_impar(0);