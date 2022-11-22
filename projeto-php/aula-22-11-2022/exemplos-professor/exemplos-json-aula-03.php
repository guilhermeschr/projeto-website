<?php

echo '<div style="display:none;">';

$aAlunos = Array(
    Array('nome'=>'Marcos','notas'=>Array(8,9,7)),
    Array('nome'=>'Maria','notas'=>Array(8,10,7)),
    Array('nome'=>'Pedro','notas'=>Array(8,5,7))
);
$sJSON = json_encode($aAlunos);

echo $sJSON;

// transformando em array de novo
$aAlunos = json_decode($sJSON, true);

echo '<pre>' . print_r($aAlunos, true). '</pre>';

// dados da pessoa em array de novo
foreach($aAlunos as $valor){
    echo "Nome:" . $valor['nome'].':';
    echo "Notas:" . implode($valor['notas'], ',').'<br>';
}

echo '</div>';

// Exemplo em JavaScript
$html = '
    <script>
        function objectToJson(){
            // console.log("ola");
            
            var aAlunos = [];
            var oAluno1 = Object();
            
            oAluno1.nome  = \'Marcos\';
            oAluno1.notas = [8,9,7];
            
            aAlunos.push(oAluno1);
            
            var oAluno2 = Object();
            oAluno2.nome  = \'Maria\';
            oAluno2.notas = [8,10,7];
            
            aAlunos.push(oAluno2);
            
            // Transformando em JSON
            var oJSON = JSON.stringify(aAlunos);
            
            console.log(oJSON);
            //[{"nome":"Marcos","notas":[8,9,7]},{"nome":"Maria","notas":[8,10,7]}]
        }
        
        function jsonToObjectTeste(){
            var sJSON =\'[{"nome":"Marcos","notas":[8,9,7]},{"nome":"Maria","notas":[8,10,7]}]\';
            
            var aAlunos = JSON.parse(sJSON);
            
            for(var i = 0; i < aAlunos.length; i++){
               document.write("Nome:" + aAlunos[i].nome + \' \');
               document.write("Notas:" + aAlunos[i].notas.toString() + \'<br>\');
               // JOIN junta
               document.write("Notas 2:" + aAlunos[i].notas.join(",") + \'<br>\');
               
               var sNotas = aAlunos[i].notas.join(",");
               // SPLIT separa
               document.write("Notas Sem Separar:" + sNotas + \'<br>\');
               
               // Transformou em array a string, separando por virgula (,)
               var aDadosNotasNovas = sNotas.split(",");
               for(var j = 0; j < aDadosNotasNovas.length; j++){
                    document.write("Nome:" + aAlunos[i].nome +
                    "<br>Notas Separado por SPLIT:" + aDadosNotasNovas[j] + \'<br>\');
               }
            }

        }
    </script>
    <button onclick="objectToJson()">Objeto para JSON</button>
    <button onclick="jsonToObjectTeste()">JSON para Objeto</button>
    ';

echo $html;







