<?php

// 1. Crie um arquivo chamado funcao.php.
// Neste arquivo implemente uma função que
// calcule uma potenciação. Serão passados
// como parâmetros: a base e o expoente.
// Feito isso, crie o arquivo potenciacao.php,
// inclua o arquivo função.php e realize
// chamadas para a sua função

include('funcao.php');

echo '<h1>Potenciação de base 10 e expoente 2:</h1>';

echo '<h1>'.potencia(15,2).'</h1>';
