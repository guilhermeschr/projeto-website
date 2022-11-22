<?php

echo '<h1>Exemplo while</h1>';

$i = 10;
while($i < 3){
    $i++;
    echo $i.'<br>Executando while simples';
}
echo 'Parou';

echo '<h1>Exemplo do while</h1>';

$i = 0;
do{
    $i++;
    echo $i.'<br> Executando....';
} while ($i < 3);

echo 'Parou';

echo '<h1>Exemplo do for</h1>';
for ($i = 0; $i < 3; $i++){
    echo 'Executando repeticao do tipo for: contador => ' . $i. '<br>';
}

echo 'Parou';

echo '<h1>Exemplo do foreach</h1>';
$cor = Array('Amarelo', 'Azul', 'Verde');
foreach ($cor as $valor){
    echo $valor.'<br>';
}

echo '<h1>mostrando chave com foreach</h1>';

foreach ($cor as $chave => $valor){
    echo 'Chave: ' . $chave .' - valor: '. $valor.'<br>';
}

echo '<span>Exemplo <b>continue</b> com foreach</span><br>';

foreach ($cor as $chave => $valor){
    // a cor da chave 1 nao sera mostrada na tela
    if($chave == 1){
        continue;
    }
    echo 'Chave: ' . $chave .' - valor: '. $valor.'<br>';
}
echo '<span>Exemplo <b>break</b> com foreach</span><br>';

foreach ($cor as $chave => $valor){
    // so vai imprimir ate a cor azul
    if($chave == 2){
        break;
    }
    echo 'Chave: ' . $chave .' - valor: '. $valor.'<br>';
}
echo 'Parou';







