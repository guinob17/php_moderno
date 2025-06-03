<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de php</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); // Define o fuso horário para São Paulo
        echo "Hoje é dia: \u{1F30E}" . date("d/M/Y"); // Exibe uma mensagem simples com um emoji
        echo "<br>";
        echo "e a hora atual é: \u{1F4C5}" . date("G:i:s"); // Exibe a hora atual com um emoji
    ?>
</body>
</html>