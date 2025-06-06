<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de Moedas</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>

        <?php 
            $valor = $_POST['valor'];
            $dolar = 5.61; // Valor do dólar em reais
            $converte = ($valor / $dolar);
            $converte_formatado = number_format($converte, 2, ',', '.');
        
            echo "Seus R$ $valor equivalem a <strong>U$ $converte_formatado</strong></p>";
        ?>
        <button onclick="history.back()">Voltar</button>
    </main>
</body>
</html>