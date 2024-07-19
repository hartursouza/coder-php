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
    <link rel="stylesheet" href="./assets/css/exercise.css">
    <title>Document</title>
</head>

<body class="exercicio">
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navigation">
        <a href="<?= " ./{$_GET['dir']}/{$_GET['file']}.php"?>" class="verde">Sem
            Formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="main">
        <div class="content">
            <?php 
                $file = "./{$_GET['dir']}/{$_GET['file']}.php";

                // Verifica se o arquivo existe antes de incluí-lo
                if (file_exists($file)) {
                    include($file);
                } else {
                    echo "Arquivo não encontrado: " . $file;
                }
            ?>
        </div>
    </main>
    <footer class=" footer">COD3R & ALUNOS &copy; <?= date("Y")?></footer>
</body>

</html>