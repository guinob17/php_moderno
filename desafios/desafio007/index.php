<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 007</title>
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $salario = $_GET['salario'] ?? 0;
    ?>
    <main>
        <h1>Informe o seu Salário</h1>
        <form action="" method="get">
            <label for="salario">Salário(R$) </label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?= $salario ?>" required>

            <p>Considerando o salário mínimo de <strong>R$1.518,00</strong></p>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $divisao = intdiv($salario, 1518);
        ?>
        <p>
            Quem recebe um salário de <strong>R$<?= number_format($salario, 2, ',', '.') ?></strong> ganha <?=$divisao ?> salários mínimos + R$ <?= number_format($salario % 1518, 2, ',', '.') ?>.
        </p>
    
    </section>
</body>
</html>