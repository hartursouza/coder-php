<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Document</title>
</head>

<body>
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="main">
        <div class="content">
            <nav class="modules">
                <div class="module verde">
                    <h3>Básico</h3>
                    <ul>
                        <li><a href="/exercise.php?dir=basic&file=hi">Olá PHP</a></li>
                        <li><a href="/exercise.php?dir=basic&file=html">Interação HTML</a></li>
                        <li><a href="/exercise.php?dir=basic&file=challenge">Desafio</a></li>
                    </ul>
                </div>
                <div class="module vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li><a href="/exercise.php?dir=tipos&file=string_challenge">Desafio</a></li>
                    </ul>
                </div>
                <div class="module azul">
                    <h3>Variáveis</h3>
                    <ul>
                        <li><a href="/exercise.php?dir=variaveis&file=var_challenge">Desafio</a></li>
                    </ul>
                </div>
                <div class="module roxo">
                    <h3>Controle</h3>
                    <ul>
                        <li><a href="/exercise.php?dir=controle&file=logical_operators_challenge">Desafio #1</a></li>
                        <li><a href="/exercise.php?dir=controle&file=switch_challenge">Desafio #2</a></li>
                    </ul>
                </div>
                <div class="module laranja">
                    <h3>Array</h3>
                    <ul>
                        <li><a href="/exercise.php?dir=arrays&file=month_challenge">Desafio #1</a></li>
                        <li><a href="/exercise.php?dir=arrays&file=draw_challenge">Desafio #2</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="footer">COD3R & ALUNOS &copy; <?= date("Y")?></footer>
</body>

</html>