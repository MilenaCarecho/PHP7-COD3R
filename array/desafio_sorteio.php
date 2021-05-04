<div class="titulo">Desafio sorteio</div>

<?php
$nomes = ["Elsa", "Rapunzel", "Branca de neve", "Cinderela"];
$indice = array_rand($nomes);
echo "<h1><div center>$nomes[$indice]</h1></div>";

?>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>