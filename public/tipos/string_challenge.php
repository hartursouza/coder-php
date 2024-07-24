<div class="title">Desafio String</div>

<?php 

//Desafio: Encontre o primeiro "abc" na string abaixo

$string = '!AbcaBcabc';

function find_abc (string $string) {
    return stripos($string, 'abc');

}

echo find_abc($string)
?>