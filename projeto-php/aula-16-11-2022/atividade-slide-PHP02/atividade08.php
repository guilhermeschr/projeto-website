<?php

function verificanumerodivisivel($n1,$n2 = 2){

    // $divisivel = ($n1 % 2 == 0) ?
    // true :
    // --else--
    // false;

    if($n1 % $n2 == 0){
        $divisivel = true;
    }else{
        $divisivel = false;
    }

    return $divisivel;

}

verificanumerodivisivel(10,5);