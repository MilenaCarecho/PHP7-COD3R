<div class="titulo">Constantes</div>

<?php 
define('TAXA_DE_JUROS', 5.9); // comum letra maiuscula e _ no espaço 
echo TAXA_DE_JUROS; //não acessa igual uma variavel 

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

$valorVariavel = 2.8;
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;
echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;