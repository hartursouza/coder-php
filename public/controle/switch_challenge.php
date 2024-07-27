<div class="title">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > milha</option>
        <option value="milha-km">Milha > km</option>
        <option value="km-metro">Km > metro</option>
        <option value="metro-km">Metros > km</option>
    </select>
    <button>Calcular</button>
</form>

<?php 
    $valor = $_POST['param'] ?? 0;
    $selecao = $_POST['conversao'] ?? 'km-milha';

    switch ($selecao) {
        case 'km-milha':
            $valor = $valor / 0.62;
            break;
        case 'milha-km':
            $valor *= 1.609343502101154;
            break;
        case 'km-metro':
            $valor *= 1000;
            break;
        case 'metro-km':
            $valor /= 1000;
            break;
    }
    echo number_format($valor, 4, ",", ".");
?>

<style>
input,
select,
button {
    font-size: 1.8rem;
}
</style>