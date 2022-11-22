<?php

function validaLogin($cpfcnpj, $password){
    return true;
}

function cadastraLogin($cpfcnpj, $password){
    return true;
}

if(isset($_POST["acao"])){
    $acao = $_POST["acao"];

    if($acao == "EXECUTA_LOGIN"){
        // EXECUTA A VALIDACAO DO LOGIN

        if(isset($_POST["cpfcnpj"])){
            $cpfcnpj = $_POST["cpfcnpj"];
            $password = $_POST["password"];

            if(validaLogin($cpfcnpj, $password)){
                header('Location:dashboard.php');
            } else {
                echo 'Usuário/Senha Invalido!';
            }
        }
    } else if($acao == "CADASTRA_LOGIN"){
        // EXECUTA O CADASTRO DO LOGIN

        if(isset($_POST["cpfcnpj"])){
            $cpfcnpj = $_POST["cpfcnpj"];
            $password = $_POST["password"];

            if(cadastraLogin($cpfcnpj, $password)){
                header('Location:dashboard.php');
            } else {
                echo 'Não foi possivel cadastrar o Usuário!';
            }
        }
    }
} else if(isset($_GET["acao"])){
    $acao = $_GET["acao"];

    switch ($acao){
        case "PRIMEIRO_ACESSO":
            // Redireciona para formulario de cadastro de usuarios
            header('Location:cadastrarusuario.php');
            break;
            case "ESQUECEU_SENHA":
                // Redireciona para formulario de esqueceu senha
                header('Location:esqueceusenhausuario.php');
            break;            
        case "ALTERAR_SENHA":
            // Redireciona para formulario de alterar senha
            header('Location:alterarsenhausuario.php');
            break;
    }

    
} else {
    echo 'Acao nao encontrada!';
}
