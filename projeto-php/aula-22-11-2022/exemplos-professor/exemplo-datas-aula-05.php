<?php
// Seta o local da data para Brasil
setlocale(LC_ALL, 'pt_BR');

echo '<hr><h1>Datas</h1>';

echo date('d/m/Y');

echo '<hr>';

// Data Atual: DD/MM/AAAA
echo date('H:i:s');

echo '<hr>';
// Hora Atual: HH:MM:SS
echo "Hora Atual:" . date('Y-m-d H:i:s');

// Data + Hora Atual: AAAA-MM-DD HH:MM:SS

echo '<hr><h1>Timestamp</h1>';

$timestamp = time();
// Retorna a representação timestamp atual. Ex.: 1452857315

echo 'timestamp:' . $timestamp;

// Formata a representação timestamp: 09/06/2012 23:21:27
echo '<br>Data formatada timestamp:' .
    date('d/m/Y H:i:s', $timestamp);

$timestamp = mktime(0, 0, 0, 1, 31, 2022);

//Retorna o timestamp para a data
echo '<br>' . date('d/m/Y H:i:s', $timestamp);
//Formata a representação timestamp




