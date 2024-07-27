<div class="title">Desafio Operadores Lógicos</div>

<!-- 
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
button,
select {
    font-size: 1.8rem;
}
</style>

<?php 
    $t1 = !!$_POST['t1'] ?? 0;
    $t2 = !!$_POST['t2'] ?? 0;

    if($t1 && $t2) {
        echo 'Vamos comprar uma TV de 50" e tomar sorvete no shopping!';
    } elseif ($t1 || $t2) {
        echo 'Vamos comprar uma TV de 32" e tomar sorvete no shopping!';
    } else {
        echo 'Vamos ficar em casa e ser saudáveis!';
    }

?>