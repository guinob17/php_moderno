<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 009</title>
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $v1 = $_GET['v1'] ?? 0;
        $p1 = $_GET['p1'] ?? 1;
        $v2 = $_GET['v2'] ?? 0;
        $p2 = $_GET['p2'] ?? 1;

        // Cálculo das médias
        $mediaAritmetica = ($v1 + $v2) / 2;
        $mediaPonderada = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>" required>

            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" min="1" value="<?=$p1?>" required>

            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>" required>

            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" min="1" value="<?=$p2?>" required>

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$v1?> e <?=$v2?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($mediaAritmetica,2,",",".")?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$p1?> e <?=$p2?> é igual a <?=number_format($mediaPonderada,2,",",".")?>.</li>
        </ul>
    </section>
</body>
</html>