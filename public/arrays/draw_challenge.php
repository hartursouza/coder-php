<div class="title">Desafio Sorteio</div>


<?php 

    $nomes = ['Elza', 'Rapunzel', 'Branca de neve', 'Cinderela'];

    echo "<h1>{$nomes[array_rand($nomes)]}</h1>";

?>

<style>
h1 {
    text-align: center;
}
</style>