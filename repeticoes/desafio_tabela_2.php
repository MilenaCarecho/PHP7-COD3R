<div class="titulo">Desafio Tabela #02</div>

<div> Gerador de tabela</div>
<form action="#" method="POST">
    <input type="number" name="linhas" id="linhas" placeholder="linhas">
    <input type="number" name="colunas" id="colunas" placeholder="colunas">
    <button>Gerar tabela</button>
</form>

<table>
<?php

    $linhas = intval($_POST['linhas']);
    $colunas = intval($_POST['colunas']);

    if(!$linhas) $linhas = 3;
    if(!$colunas) $colunas = 3;

    $num = 1;
    for ($i=0; $i < $linhas ; $i++) { 
            echo "<tr>";
            for ($j=0; $j < $colunas ; $j++) { 
                echo "<td>$num</td>";
                $num++;
            }
            echo "</tr>";
    }

?>
</table>
<style> 
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    table tr {
        border: 1px solid #444;
    }
    table td {
        padding: 10px 20px;
    }
</style>