<div class="titulo">Array Constantes</div>

<?php
const FRUTAS = array('Laranja', 'Abacaxi');
// FRUTAS = 'teste';
// FRUTAS = 'banana';
// FRUTAS = 'banana';

echo FRUTAS[0];

const CARROS = ['Fiat' => "Uno", "Ford" => "Fiesta"];
// CARROS["BMW"] = '325i';
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
echo '<br>' . CIDADES[1];