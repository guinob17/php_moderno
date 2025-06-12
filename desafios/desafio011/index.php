<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 011</title>
</head>
<body>
    <?php 
        $preco = $_REQUEST['preco'] ?? '0';
        $reajuste = $_REQUEST['reajuste'] ?? '0';

        $aumento = $preco * $reajuste / 100;
        $novo = $preco + $aumento;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>" min="0,10" step="0.01" required>

            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>" required>

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($preco, 2, ",", ".")?>, com <strong><?=number_format($reajuste, 2, ",", ".")?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($novo, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>

    <script>
        mudaValor();
        function mudaValor(){
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>