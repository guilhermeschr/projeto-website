<?php
// Declare tres variaveis
$carroA = 15000;
$carroB = 15000;
$carroC = 15000;

// Imprima em uma tabela nas colunas os valores
$html = '<table border="1">';
$html .= '<thead>';

$html .= '<th>';
$html .= 'Carro';
$html .= '</th>';

$html .= '<th>';
$html .= 'Valor';
$html .= '</th>';

$html .= '</thead>';
$html .= '<tbody>';
$html .= '<tr>';
$html .= '    <td>Gol - 2010</td>';
$html .= '    <td>R$ ' . $carroA . '</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '    <td>Palio- 2013</td>';
$html .= '    <td>R$ ' . $carroB . '</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '    <td>Fiesta - 2014</td>';
$html .= '    <td>R$ ' . $carroC . '</td>';
$html .= '</tr>';
$html .= '</tbody>';
$html .= '</table>';

echo $html;
