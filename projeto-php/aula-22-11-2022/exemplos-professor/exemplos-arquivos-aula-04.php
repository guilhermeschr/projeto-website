<?php

echo '<hr><h1>Gravando Arquivo...</h1>';

define('ENTER', '
');

$sJSON = '[{"nome":"Marcos","notas":[8,9,7]},{"nome":"Maria","notas":[8,10,7]}] ';

FILE_PUT_CONTENTS('arquivo.json', $sJSON . ENTER, FILE_APPEND);

echo '<hr><h1>Recuperando valor do arquivo gravado:</h1>';

$sConteudo = trim(FILE_GET_CONTENTS('arquivo.json'));
$aLinhas   = explode(ENTER, $sConteudo);
foreach($aLinhas as $valor){
    // echo $valor . '<br>';
    // echo '<hr><h1>Recuperando valor do arquivo gravado:</h1>';
    
    $aDadosArquivo = json_decode($valor, true);
    
    foreach($aDadosArquivo as $valores){
        echo "Nome:" . $valores['nome'].':';
        echo "Notas:" . implode($valores['notas'], ',').'<br>';
    }
}



