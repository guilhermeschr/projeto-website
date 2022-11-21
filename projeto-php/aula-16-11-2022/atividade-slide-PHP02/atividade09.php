<?php

$aDados = array();

function criaContato($nome, $sobrenome, $idade, &$aDados){
    $aDados[] =$nome;
    $aDados[] =$sobrenome;
    $aDados[] =$idade;
}

criaContato('joao','da silva',25, $aDados);
criaContato('joao1','da silva',25, $aDados);
criaContato('joao2','da silva',25, $aDados);
criaContato('joao3','da silva',25, $aDados);
criaContato('joao4','da silva',25, $aDados);
criaContato('joao5','da silva',25, $aDados);
criaContato('joao6','da silva',25, $aDados);

echo '<pre>'. print_r($aDados, true).'<pre>';