<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 005</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_POST['num'];

            echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usuário:</p>";

            $int = intval($num);
            $frac = $num - $int;

            echo "<ul>";
            echo "<li>A parte inteira do número é <strong>" . number_format($int, 0 , ",", ".") . "</strong></li>";
            echo "<li>A parte fracionária do número é <strong>" . number_format($frac, 3, ",", ".") . "</strong></li>";
            echo "</ul>";
        ?>
        <button onclick="history.back()">Voltar</button>
    </main>
</body>
</html>