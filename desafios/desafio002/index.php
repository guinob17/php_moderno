<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteador</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>
            <?php 
                $numero = random_int(0, 100);
                echo "Gerando um número aleatório entre 0 e 100...<br>";
                echo "O valor gerado foi <strong>$numero</strong>";
                
            ?>
        </p>

        <button onclick="javascript:document.location.reload()">Gerar Outro</button>

    </main>
</body>
</html>