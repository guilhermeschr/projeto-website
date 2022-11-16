<?php

//2)a)
echo "2)a)<pre>" . print_r($_SERVER, true) . "</pre>";

echo '<br>';

//2)b)
// echo "<pre>" . print_r($_SERVER['SERVER_ADDR'], true) . "</pre>";
echo '2)b)'.$_SERVER['SERVER_ADDR'];

echo '<br>';
echo '<br>';

//2)c)
echo '2)c)'.$_SERVER['SCRIPT_NAME'];

echo '<br>';
echo '<br>';

//2)d)
echo '2)d)'.$_SERVER['SCRIPT_NAME'].$_SERVER['SERVER_ADDR'];


