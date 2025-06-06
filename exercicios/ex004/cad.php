<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET['nome'] ?? 'chico';
            $sobrenome = $_GET['sobrenome'] ?? 'bento';
            echo "<p>O nome completo é: <strong>$nome $sobrenome</strong></p>";
        ?>
        <p><a href="javaScript:history.back()">Voltar</a></p>
    </main>
</body>
</html>