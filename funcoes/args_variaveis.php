<div class="titulo">Argumentos variaveis</div>

<?php
function soma($a, $b){
    return $a + $b;
}

echo soma(14, 15) . "<br>";
echo soma(6, 5, 4) . "<br>";

function somaCompleta(...$numero){
    $soma = 0;
    foreach($numero as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3 , 4, 5); = [6,7,8]


$array = [6,7,8]
