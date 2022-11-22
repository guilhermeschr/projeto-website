<?php

//$aDados = array(1,2,3);
$aDados[] = 1;
$aDados[] = 2;
$aDados[] = 3;

//echo '<pre>' . print_r($aDados, true). '</pre>';

foreach ($aDados as $key => $value){
    echo '<br> Chave:' . $key . ' valor:' . $value;
}

echo '<hr><h1>Array associativo:</h1>';
// array associativo
$aDados2 = array("codigo" => 1,
                 "nome" => "joao" ,
                 "telefone" => "47988544545");

$sql_insert  = "";
$dadosInsert = "";
$primeiraVez = true;
foreach ($aDados2 as $key => $value){
    echo '<br> Chave:' . $key . ' valor:' . $value;
    
    if($primeiraVez){
        $primeiraVez = false;
        // nao adiciona virgula
        $dadosInsert = $dadosInsert . $value;
    } else {
        $dadosInsert = $dadosInsert . ',' . $value;
    }
}

$sql_insert = "insert into tbpessoa(codigo,nome,telefone)
  values ($dadosInsert)";

echo '<h1> sql de insert</h1>' . $sql_insert;

echo "<h1>Exemplo de funcao explode em PHP:</h1>";

$str = 'one|two|three|four';

echo 'String:' . $str . '<br>';

$aDadosNovoArray = explode('|', $str, 2);

$aDadosNovoArray = explode('|', $str);

echo '<pre>' . print_r($aDadosNovoArray, true). '</pre>';

// Exemplo token
// jwt token
$token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c";
$aDadosToken = explode('.', $token);
echo '<pre>' . print_r($aDadosToken, true). '</pre>';

echo '<h1>Juntando as partes do token e separando por virgula.</h1>';

// pega o array e junta separando numa string pelo delimitador
$sToken = implode(",",$aDadosToken);

echo $sToken;
























