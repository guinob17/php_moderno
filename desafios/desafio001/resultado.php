<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>

        <?php 
            $numero = $_POST['numero'];
        
            echo "<p>O número escolhido foi <strong>$numero</strong></p>";
            echo "<p>O seu antecessor é " . ($numero - 1) . "</p>";
            echo "<p>O seu sucessor é " . ($numero + 1) . "</p>";
        ?>
        <button onclick="history.back()">Voltar</button>
    </main>
</body>
</html>