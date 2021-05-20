<div class="titulo">Recursividade</div>

<?php 

function somaUmAte($numero){
    $soma = 0;
    for ($i = 1; $i <= $numero; $i++){
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(150) . '<br>';


function somaRecursivaUmaAte($numero){
    // Condição de Parada!!!!
    if ($numero === 1) return 1;
    return $numero + somaRecursivaUmaAte($numero - 1);
}

echo somaRecursivaUmaAte(150) . '<br>';

function somaRecursivaEconomica($numero){
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(150) . '<br>';