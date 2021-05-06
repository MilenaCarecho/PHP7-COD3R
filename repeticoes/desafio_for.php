<div class="titulo">Desafio Laço for</div>

<!--
Usar o for...
#
##
###
####
#####
1) Pode usar o incremento $i++
2) Não pode usar o incremento $i++
-->

<?php 
$impressao ='';
for ($cont=1; $cont <= 5; $cont++ ){
    $impressao .= "#";
    echo "$impressao <br>";
}

echo "<hr>";

$array = [1 => '#', '##', '###', '####', '#####'];

print_r($array);

echo "<hr>";

for ($i = 1; $i <= count($array); $i++){
    echo "{$array[$i]} <br>";
}
echo "<hr>";

for ($impressao2 ='#'; $impressao2 !=='######'; $impressao2 .= '#'){
    echo "$impressao2 <br>";
}