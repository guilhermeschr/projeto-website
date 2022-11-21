<?php

//2)a)
echo "2)a)<pre>" . print_r($_SERVER, true) . "</pre>";

echo '<br>';

//2)b)
// echo "<pre>" . print_r($_SERVER['SERVER_ADDR'], true) . "</pre>";
echo '2)b)IP do pc: '.$_SERVER['REMOTE_ADDR'];

echo '<br>';
echo '<br>';

//2)c)
echo '2)c)Nome do arquivo atual: '.$_SERVER['SCRIPT_FILENAME'];

echo '<br>';
echo '<br>';

//2)d)
echo '2)d)url atual: '.$_SERVER['REMOTE_ADDR'].$_SERVER['SCRIPT_NAME'];


