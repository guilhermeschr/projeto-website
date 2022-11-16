<?php

$variavel = 1;

//echo isset($variavel);

if(isset($variavel)){
    echo 'a variavel de nome "variavel" existe';
} else {
    echo 'a variavel de nome "variavel" nao existe';
}

//echo isset($var);

$variavelArray = Array(1,2,3);

//echo isset($variavelArray[0]);
//echo isset($variavelArray[5]);

$aDados = array(1,23);

if(is_array($aDados)){
    // faz algo
}

$oObjeto = new stdClass();
$oObjeto->codigo = 1;

if(is_object($oObjeto)){
    // faz algo
}

// coloca um valor para inteiro
$valor = "15";
if(!is_int($valor)){
    $valor_inteiro = intval($valor);
}

define('PI', 3.14);
define('TAXA_EMPRESTIMO', 3.78);

echo 'Valor de PI: ' . PI;

$valor_capital = 100;
$valor_a_pagar = $valor_capital * TAXA_EMPRESTIMO;

echo ' valor a pagar: ' . $valor_a_pagar;


// valores de variaveis globais - arrays

$_SERVER["DADOS-NOVOS"] = 45454545;
echo '<hr>';
//echo '<h1>SERVER</h1>';
// echo "<pre>" . print_r($_SERVER, true) . "</pre>";
echo '<hr>';
echo '<hr>';
echo '<h1>GET</h1>';
echo "<pre>" . print_r($_GET, true) . "</pre>";
echo '<hr>';
echo '<hr>';
echo '<h1>POST</h1>';
echo "<pre>" . print_r($_POST, true) . "</pre>";
echo '<hr>';

















