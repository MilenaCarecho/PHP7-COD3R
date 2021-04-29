<div class="titulo">Operadores Logicos</div>

<?php 

echo "<p>Negação logica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); //not

echo "<p>Tabela Verdade AND (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
//var_dump(false && ?);
var_dump(false && true);
var_dump(false && false);

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p><strong>Tabela Verdade 'OR' (OU) </strong></p>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);
?>

<style>
p {
    margin-bottom: 0px;
}

hr {
    margin-top: 0px;
}
</style>