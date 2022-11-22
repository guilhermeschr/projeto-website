<?php

require_once ("default/header.php");

// No formulario, campos disables nao sao enviados ao php
echo '
<main>
    <h1>
        Minha pagina de pessoas
    </h1>
    
    <form action="cadastrarpessoa.php" method="post">
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" value="1">
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="Joao da Silva">
        
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" value="(47)98865-4848">
        
        <input type="submit" value="Enviar">
    </form>
</main>';


require_once ("default/footer.php");


