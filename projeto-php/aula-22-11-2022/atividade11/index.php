<?php

echo '<h1>Letra A</h1>
<h3>Transcreva os dados da tabela em um array</h3>';

$aDados = array(
    array("Time", "Posicao","Pontos","Retrospecto"),
    array("Corinthias","1","81","E,D,V"),
    array("Sport","1","69","V,V,E"),
    array("Santos","1","58","D,D,V"),
    array("Cruzeiro","1","52","E,V,E"),
    array("Internacional","1","50","D,V,E")
);

echo '<pre>'. print_r($aDados,true).'</pre>';

echo '<h1>Letra B</h1>
<h3>Percorra este array e para cada time gere um objeto JSON com seus dados;</h3>';

foreach($aDados as $key => $aValues){
    if($key == 0){
        continue;
    }
    $json = json_encode($aDados);

    echo '<br>'. $json;
}

echo '<h1>Letra C</h1>
<h3>Grave estes dados em um arquivo, de forma que cada time seja uma linha;</h3>';

define("ENTER", "
");

$aDadosArquivo = file_get_contents("times.json");

$existeArquivo = false;
if($aDadosArquivo){
    $existeArquivo = true;
}

foreach ($aDados as $key => $aValues){
    $json = json_encode($aValues);

    if(!$existeArquivo){
        $totalLinhas = count($aDados) - 1;

        // echo '<br>chave' . $key . ' total linhas:' . $totalLinhas ;

        // Na ultima linha nao adicionar enter
        if($key == $totalLinhas){
            file_put_contents("times.json", $json, FILE_APPEND);
        } else {
            file_put_contents("times.json", $json . ENTER, FILE_APPEND);
        }
    }
}

echo '<h1>Letra D</h1>
<h3>Leia as informações deste arquivo, transcreva novamente em um array e imprima uma tabela com a classificação do campeonato.</h3>';

$aDadosArquivo = file_get_contents("times.json");

if($aDadosArquivo){
    echo '<h1>Arquivo encontrado!</h1>';
    // percorre os dados

    $aDadosArquivoLido = explode(ENTER, $aDadosArquivo);

    echo '<pre>' .  print_r($aDadosArquivoLido, true).'</pre>';

    // inicia a tabela
    $html_tabela = "<table border='1'>";
    foreach ($aDadosArquivoLido as $key => $value){

        $aDados = json_decode($value);

        // Cabecalho
        if($key == 0){
            $html_tabela .= "
            <thead>
                <th>" . $aDados[0]."</th>
                <th>" . $aDados[1]."</th>
                <th>" . $aDados[2]."</th>
                <th>" . $aDados[3]."</th>
            </thead>";
        } else {
            $html_tabela .= "
            <tr>
                <td>" . $aDados[0]."</td>
                <td>" . $aDados[1]."</td>
                <td>" . $aDados[2]."</td>
                <td>" . $aDados[3]."</td>
            </tr>";
        }
    }

    $html_tabela .= "<table>";

    echo $html_tabela;

} else {
    echo '<h1>Arquivo nao encontrado!</h1>';
}
