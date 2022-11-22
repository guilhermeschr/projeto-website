<?php


// 4. Faça com que o número passado para a função
//  do exercício anterior venha de um formulário HTML.

include('funcao.php');
// function sequencia($numero){
//     for($i=0;$i<10;$i++){
//         echo $numero;
//         $numero=$numero+1;
//         if($i==9){
//             break;
//         }
//         echo '-';
//     }
// }


echo '<h1>10 números seguidos:</h1>';

echo '<form action="funcao.php" method="get">
    <label for="">Número:</label>
        <input type="text" id="num" name="num" value=" ">

        <input type="submit" value="Enviar">
</form>';
$num=0;
if(isset($_GET["numero"])){

    $num = $_GET["numero"];
}


sequencia($num);