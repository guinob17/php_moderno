<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 006</title>
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $dividendo = $_GET['d1'] ?? 0;
        $divisor = $_GET['d2'] ?? 1;

        // Validando o divisor para evitar divisão por zero
        // if ($divisor == 0) {
        //     $resultado = "Divisão por zero não é permitida.";
        // } else {
        //     $resultado = $dividendo / $divisor;
        // }
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" min="0" value="<?= $dividendo ?>" required>

            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" min="1" value="<?= $divisor ?>" required>

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
            // Calculando o quociente e o resto
            $quociente = intdiv($dividendo, $divisor);

            // echo "<ul>";
            // echo "<li>Dividendo: <strong>$dividendo</strong></li>";
            // echo "<li>Divisor: <strong>$divisor</strong></li>";
            // echo "<li>Quociente: <strong>" . $quociente . "</strong></li>";
            // echo "<li>Resto: <strong>" . ($dividendo % $divisor) . "</strong></li>";
            // echo "</ul>";
        ?>
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $dividendo % $divisor ?></td>
                <td><?= $quociente ?></td>
            </tr>
        </table>
    
    </section>
</body>
</html>