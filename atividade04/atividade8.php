<?php

$times = array("joinville"    => array('posicao'=>'2','pontos'=>'5','saldo_gols'=>'4'),
                "chapecoense" => array('posicao'=>'1','pontos'=>'9','saldo_gols'=>'6'),
                "figuerense"  => array('posicao'=>'3','pontos'=>'3','saldo_gols'=>'0'),
                "avai"        => array('posicao'=>'4','pontos'=>'1','saldo_gols'=>'-2'));

print_r($times);

foreach($times as $key => $value){
    //em json
    echo '<h3> Chave: '.$key.json_encode($value).'</h3>';

}
