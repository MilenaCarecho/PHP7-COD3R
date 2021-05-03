<div class="titulo">Desafio switch</div>
 
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="Celsius-Fahrenheit">Celsius > Fahrenheit</option>
        <option value="Fahrenheit-Celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CELSIUS_FAHRENHEIT = 1.8;
const FATOR_ADICIONAL = 32;
$mensagem ='';
$valor = $_POST['param'];
$condicao = $_POST['conversao'];
$resultado = '';

switch ($condicao) {
    case 'km-milha':
        $resultado = $valor / FATOR_KM_MILHA;
        $mensagem = "$valor Km = $resultado Milhas";
        break;
    case 'milha-km':
        $resultado = $valor * FATOR_KM_MILHA;
        $mensagem = "$valor Milhas = $resultado Km";
        break;
    case 'metro-km':
        $resultado = $valor / FATOR_METRO_KM;
        $mensagem = "$valor Metros = $resultado Km";
        break;
    case 'km-metro':
        $resultado = $valor * FATOR_METRO_KM;
        $mensagem = "$valor Km = $resultado Metros";
        break;
    case 'Celsius-Fahrenheit':
        $resultado = $valor * FATOR_CELSIUS_FAHRENHEIT + 32;
        $mensagem = "{$valor}° Celsius = {$resultado}° Fahrenheit";
        break;
    case 'Fahrenheit-Celsius':
        $resultado = ($valor - FATOR_ADICIONAL) / FATOR_CELSIUS_FAHRENHEIT;
        $mensagem = "{$valor}° Fahrenheit = {$resultado}° Celsius";
        break;
    default: 
        $mensagem = "Nenhum valor calculado";
}
$resultado = number_format($resultado, 2, ',', '.');
echo "<p>$mensagem</p>";