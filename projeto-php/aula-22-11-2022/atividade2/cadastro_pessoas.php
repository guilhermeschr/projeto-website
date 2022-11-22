<?php

if(isset($_GET["nome"])){
    echo '<h1>Formulario via <b>GET</b></h1>';

    $nome = $_GET["nome"];

    $mensagem = 'Boa noite, <b>' . $nome . '</b>';

    echo $mensagem;
} if(isset($_POST["nome"])){
    echo '<h1>Formulario via <b>POST</b></h1>';

    $nome = $_POST["nome"];

    $mensagem = 'Boa noite, <b>' . $nome . '</b>';

    echo $mensagem;
} else {
    // Retorno JSON
    // $mensagem = '{"status": false, "mensagem": "Parametros nao informados!"}';
    // echo $mensagem;

    $aDadosMensagem = array(
        "status" => false,
        "mensagem"=> "Parametros nao informados!");

    // encoda para json
    echo json_encode($aDadosMensagem);

}