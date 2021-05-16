<div class="titulo">Argumento Padrão </div>

<?php 
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(null);
echo saudacao(null, null);
echo saudacao('Mestre', 'Supremo');

echo '<hr>';

function anotarPedido($comida, $bebida = 'Agua'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Hamburguer', 'Refrigerante');
echo '<hr>';

function anotarPedido2( $bebida = 'Agua', $comida){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

//anotarPedido2('Hamburguer');
anotarPedido2('Refrigerante2', 'Hamburguer2');
