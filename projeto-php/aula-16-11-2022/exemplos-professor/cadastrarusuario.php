<?php

echo '<hr>';
echo '<h1>POST</h1>';
echo "<pre>" . print_r($_POST, true) . "</pre>";
echo '<hr>';

if(isset($_POST["codigo"])){
    echo 'codigo da pessoa:' .$_POST["codigo"];
}


