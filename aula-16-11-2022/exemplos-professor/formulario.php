<?php

// criar formulario em html fazendo o action apontar para o php

$html_formulario = "
    <form action='cadastrarusuario.php' method='post'>
        <label>Código:</label>
        <input type='text' name='codigo' value='45'>
        
        <label>Nome:</label>
        <input type='text' name='nome' value='Joao da silva'>
        
        <input type='submit' value='Enviar'>        
    </form>
";

echo $html_formulario;