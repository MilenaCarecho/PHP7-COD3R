<div class="titulo">Argumentos & Retornos</div>

<?php

function obterMensagem(){
    return 'Seja bem vindo(a)!';
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';

var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem vindo(a), {$nome}!";
}

echo '<br>', obterMensagemComNome('Milena');
echo '<br>', obterMensagemComNome('Marcos');

function soma($a, $b){
    return $a + $b;
}

$x = 4; 
$y = 5;
echo '<br>', soma(45, 78);
echo '<br>', soma($x, $y);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>', $variavel;

function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocaValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;







