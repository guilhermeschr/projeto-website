<?php
// 2. Crie um formulário HTML que contenha um campo
// para informação de um nome. Este nome deverá ser
// submetido para o PHP, que deverá imprimir: Boa noite,
// $nome! Realizar a submissão utilizando GET e depois POST.

$html_formulario = '
    <h1>Formulario via <b>GET</b></h1>
    <form action="cadastropessoa.php" method="get">
        <label for="">Nome:</label>
        <input type="text" id="nome" name="nome" value="Joao da Silva">

        <input type="submit" value="Enviar">
    </form>
';

echo $html_formulario;

echo '<hr>';
$html_formulario = '
    <h1>Formulario via <b>POST</b></h1>
    <form action="cadastropessoa.php" method="post">
        <label for="">Nome:</label>
        <input type="text" id="nome" name="nome" value="Joao da Silva">

        <input type="submit" value="Enviar">
    </form>
';

echo $html_formulario;