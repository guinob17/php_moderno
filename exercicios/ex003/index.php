<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // Tipos primitivos em PHP
        $inteiro = 10; // Tipo inteiro
        $flutuante = 10.5; // Tipo float
        $string = "Olá, PHP!"; // Tipo string
        $booleano = false; // Tipo booleano

        echo "Inteiro: $inteiro <br>";
        echo "Flutuante: $flutuante <br>";
        echo "String: $string <br>";
        echo "Booleano: " . ($booleano ? 'verdadeiro' : 'falso') . "<br>";
        var_dump($inteiro);
    ?>
</body>
</html>