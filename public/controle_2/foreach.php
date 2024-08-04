<div class="title">Foreach</div>

<?php 

    $array =[
        1 => 'Domingo',
        'Segunda',
        'Terça',
        'Quarta',
        'Quinta',
        'Sexta',
        'Sábado'
    ];

    foreach ($array as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    foreach ($array as $chave => $valor) {
        echo "$chave => $valor <br>";
    }

?>