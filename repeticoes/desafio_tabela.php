<div class="titulo">Desafio tabela</div>

<?php
$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20']
];

foreach ($matriz as $linha){
    foreach($linha as $valor){
        echo "$valor ";
    }
    echo '<br>';
}
?>

<table>
    <tr>
        <td><?php echo "$linha[0]" ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <th>01</th>
        <th>Lastname</th>
        <th>Age</th>
    </tr>
    <tr>
        <th>01</th>
        <th>Lastname</th>
        <th>Age</th>
    </tr>
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