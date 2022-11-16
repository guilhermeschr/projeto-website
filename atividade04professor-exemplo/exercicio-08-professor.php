<?php

$time = array (
    "Joinville"  => array ("posicao"=>"2", "pontos"=>"5", "saldo_gols"=>"4"),
    "Chapecoense"=> array ("posicao"=>"1", "pontos"=>"9", "saldo_gols"=>"6"),
    "Figuerense" => array ("posicao"=>"3", "pontos"=>"3", "saldo_gols"=>"0"),
    "Avaí"       => array ("posicao"=>"4", "pontos"=>"1", "saldo_gols"=>"-2"));

// Inicia a tabela de dados
$html_tabela = '<table border="1">
<thead>
    <th>Time</th>
    <th>Posição</th>
    <th>Pontos</th>
    <th>Saldo de Gols</th>
</thead>
<tbody>';
foreach ($time as $key => $aDados){
    // echo '<br> Chave:' . $key . json_encode($value);
    // implode separa pela virgula
    // echo '<br> Chave:' . $key . ' - ' . implode(",", $value);

    $cidade = $key;
    $posicao = $aDados["posicao"];
    $pontos = $aDados["pontos"];
    $saldo_gols = $aDados["saldo_gols"];

    // Inicia a linha
    $html_linha_tabela = '<tr>';

    // Inicia as colunas
    $html_linha_tabela .= '<td>' . $cidade . '</td>';
    $html_linha_tabela .= '<td>' . $posicao .'</td>';
    $html_linha_tabela .= '<td>' . $pontos . '</td>';
    $html_linha_tabela .= '<td>' . $saldo_gols.'</td>';

    // finaliza a linha
    $html_linha_tabela .= '</tr>';

    // Adiciona a linha na tabela
    $html_tabela .= $html_linha_tabela;
}

$html_tabela .= '</tbody>';
// finaliza a  tabela

// mostrando a tabela

echo $html_tabela;
