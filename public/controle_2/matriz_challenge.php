<div class="title">Desafio Matriz</div>

<?php 
    $matriz = [
        ['01', '02', '03', '04', '05'],
        ['06', '07', '08', '09', '10'],
        ['11', '12', '13', '14', '15'],
        ['16', '17', '18', '19', '20']
    ];

    foreach ($matriz as $linha) {
        foreach ($linha as $numero) {
            echo "$numero ";
        }
        echo "<br>";
    }
?>

<table>
    <?php foreach ($matriz as $linha):?>
    <tr>
        <?php foreach ($linha as $numero):?>
        <td><?=$numero?></td>
        <?php endforeach;?>
    </tr>
    <?php endforeach;?>
</table>

<table>
    <?php foreach ($matriz as $key => $linha):?>
    <?php if($key % 2 != 0):?>
    <tr green>
        <?php foreach ($linha as $numero):?>
        <td><?=$numero?></td>
        <?php endforeach;?>
    </tr>

    <?php else:?>
    <tr>
        <?php foreach ($linha as $numero):?>
        <td><?=$numero?></td>
        <?php endforeach;?>
    </tr>
    <?php endif;?>
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

[green] {
    background-color: aqua;
}
</style>