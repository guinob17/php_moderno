<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 012</title>
</head>
<body>
    <?php 
        $segundos = $_REQUEST['segundos'] ?? '0';
        $segundos = (int)$segundos; // Garante que estamos lidando com um número inteiro
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>" required>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=$segundos?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <?php
                $semanas = floor($segundos / 604800); // 1 semana = 604800 segundos
                $resto = $segundos % 604800;

                $dias = floor($resto / 86400); // 1 dia = 86400 segundos
                $resto = $resto % 86400;

                $horas = floor($resto / 3600); // 1 hora = 3600 segundos
                $resto = $resto % 3600;

                $minutos = floor($resto / 60); // 1 minuto = 60 segundos
                $restoSegundos = $resto % 60;

                echo "<li>$semanas semanas</li>";
                echo "<li>$dias dias</li>";
                echo "<li>$horas horas</li>";
                echo "<li>$minutos minutos</li>";
                echo "<li>$restoSegundos segundos</li>";
            ?>
        </ul>
    </section>
</body>
</html>