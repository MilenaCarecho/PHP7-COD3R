<div class="titulo">Função & Escopo</div>

<?php 

function imprimirMensagens(){
    echo "Olá! ";
    echo "Até a proxima!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

echo "<hr>";

$variavel = 1;

function trocaValor() {
    $variavel = 2;
    echo "Durante a função $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

echo "<hr>";

function trocaValorDeVerdade(){
    global $variavel;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

echo "<hr>";

var_dump(trocaValorDeVerdade());    