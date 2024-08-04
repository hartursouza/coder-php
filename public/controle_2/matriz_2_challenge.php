<div class="title">Desafio Matriz #2</div>

<?php 

$linhas = $_POST['rows'] ?? 0;
$colunas = $_POST['columns'] ?? 0;

$matriz = [];
$count = 0;

for ($i=0; $i < $linhas; $i++) { 
    for ($j=0; $j < $colunas; $j++) { 
        $matriz[$i][$j] = $count++;
    }
}

?>

<form action="#" method="post">
    <div>
        <label for="rows">Linhas</label>
        <input type="text" name="rows">
    </div>
    <div>
        <label for="column">Colunas</label>
        <input type="text" name="columns">
    </div>
    <button>Enviar</button>
</form>

<table>
    <?php foreach ($matriz as $linha):?>
    <tr>
        <?php foreach ($linha as $numero):?>
        <td><?=$numero?></td>
        <?php endforeach;?>
    </tr>
    <?php endforeach;?>
</table>

<style>
table {
    border: 1px solid #444;
    border-collapse: collapse;
    margin: 20px 0;
}

table tr {
    border: 1px solid #444;
}

table td {
    padding: 10px 20px;
}
</style>