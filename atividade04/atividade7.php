<?php

$cidades = array ('sc' => array('Rio do sul','Blumenau','joinville'),
                  'rs' => array('Porto Alegre','Santa Rosa','Caxias do Sul'),
                  'pr' => array('Curitiba','Pato Branco','Londrina'));

print_r($cidades);

//inicia a tabela de dados

foreach($cidades as $key => $value){
    //em json
    echo '<h3> Chave: '.$key.json_encode($value).'</h3>';

}

