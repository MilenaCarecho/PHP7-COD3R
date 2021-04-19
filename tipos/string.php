<div class="string">Tipo String</div>

<?php

echo 'Eu sou uma String';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação 

echo "Nós tambem " . 'somos';
echo '<br>', "Tambem aceito", " virgulas";
echo '<br>';
echo '"Teste"' . " 'Teste'", ' \'Teste\'', " \"Teste\"", "\\";

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira lestra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); //parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');