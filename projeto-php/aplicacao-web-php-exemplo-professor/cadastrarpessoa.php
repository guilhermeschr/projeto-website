<?php

require_once ("default/header.php");

// No formulario, campos disables nao sao enviados ao php
echo '
<main>
    <h1>
        Minha pagina de cadastro de pessoas
    </h1>
    <h1>dados do POST</h1>
    <pre>' . print_r ($_POST, true) . '</pre>
</main>';

require_once ("default/footer.php");


