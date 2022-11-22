<?php

// 8. Crie um script PHP que receba o código JSON abaixo,
// transforme ele em um array, e exiba suas informações na
// tela (Não utilizar print_r). {"Title": "The Cuckoos Calling",
//      "Author": "Robert Galbraith", "Detail":
//      { "Publisher": "Little Brown" }}

$aJSON = '{"Title": "The Cuckoos Calling","Author": "Robert Galbraith", "Detail": { "Publisher": "Little Brown" }}';

$aDados = json_decode($aJSON, true);

foreach ($aDados as $key => $value){

    if($key == "Title"){
        echo 'Titulo:' . $value;
    }
    if($key == "Author"){
        echo 'Autor:' . $value;
    }
    if($key == "Detail"){
        echo ' Detalhes:' . implode(",", $value);
        echo ' ->Detalhes 2:' . $value["Publisher"];
    }
    echo '<br>';
}