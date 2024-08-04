<div class="title"> Desafio for/foreach</div>

<?php 
    $array = [
        'AAA',
        'BBB',
        'CCC',
        'DDD',
        'EEE',
        'FFF'
    ];

    foreach ($array as $key => $value) {
        if($key % 2 == 0)
            echo "$key => $value <br>";
    }

?>