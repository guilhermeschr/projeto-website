<?php
$nume1=10;
$nume2=5;

function soma($num1,$num2){
return $num1+$num2;
};

function subtracao($num1,$num2){
return $num1-$num2;
};
function multiplicacao($num1,$num2){
return $num1*$num2;
};
function divisao ($num1,$num2){
return $num1*$num2;
};


echo '<h3>Soma:'.soma($nume1,$nume2).'</h3>';

echo '<h3>Subtracao:'.subtracao($nume1,$nume2).'</h3>';

echo '<h3>Multiplicacao:'.multiplicacao($nume1,$nume2).'</h3>';

echo '<h3>Divisao:'.divisao($nume1,$nume2).'</h3>';
