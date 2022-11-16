<?php
define('TAXA_JUROS', 15);

function nomeDaFuncao($arg1 = 1, $arg2 = 3, $arg3 = 5, $validaDados = false){
    // Comandos;
    echo $arg1 . ' - ' . $arg2 . ' - '. $arg3;

    if($validaDados){
        echo 'validando dados....';
    }

    echo 'taxa juros:' . TAXA_JUROS;
    return '<valor de retorno>';
}


nomeDaFuncao(7,8,9);
echo '<br>';
// ate o php 7.0 nao e obrigado passar nenhum dos parametros , mesmo ele nao estando como opcional
// apos o php 7.2  e obrigado passar os parametros opcionais


//echo phpinfo();

 nomeDaFuncao(1,2,3);

 // exemplo de variavel estatica

function teste(){
    static $variavel;
    static $conexao_banco;
    if (!isset($variavel)){
        $variavel = 1;
        echo 'Atribuiu valor a static <br>';

        $conexao_banco = "minha-conexao";
    }
    echo $variavel.'<br>';
    $variavel++;

    return $conexao_banco;
}

teste();
teste();
teste();





