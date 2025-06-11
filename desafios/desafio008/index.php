<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 008</title>
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $num = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="" method="get">
            <label for="num">Número </label>
            <input type="number" name="num" id="num" step="0.001" value="<?= $num ?>" required>

            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $quadrada = sqrt($num);
            $cubica = pow($num, 1/3);
        ?>
        <p>
            Analisando o <strong>número <?= $num ?></strong>, temos:
            <ul>
                <li>A sua raiz quadrada é <strong><?= number_format($quadrada, 3, ',', '.') ?></strong></li>
                <li>A sua raiz cúbica é <strong><?= number_format($cubica, 3, ',', '.') ?></strong></li>
            </ul>
        </p>
    
    </section>
</body>
</html>