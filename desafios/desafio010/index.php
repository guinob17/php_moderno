<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 010</title>
</head>
<body>
    <?php 
        // Capturando os dados do Formulário Retroalimentado
        $ano_atual = (int)date("Y");
        $ano = $_GET['ano'] ?? $ano_atual;
        $ano_nasc = $_GET['ano_nasc'] ?? '2000';
        $idade = $ano - $ano_nasc;

        // Convertendo para inteiros para garantir a comparação correta
        $ano = (int)$ano;
        $ano_nasc = (int)$ano_nasc;

        if ($ano >= $ano_nasc) {
            $idade = $ano - $ano_nasc;
        } else {
            $idade = "invalidado...";
        }
    ?>
    <main>
        <h1>Calculando sua Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano_nasc" id="ano_nasc" value="<?=$ano_nasc?>" max="<?=$ano_atual?>" required>

            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <?=$ano_atual?>)</label>
            <input type="number" name="ano" id="ano" min="<?=$ano_nasc?>" value="<?=$ano?>" required>

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$ano_nasc?> terá(teve) <strong><?=$idade?> anos</strong> em <?=$ano?>!</p>
    </section>
</body>
</html>