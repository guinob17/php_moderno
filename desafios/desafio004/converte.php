<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 004</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas 2.0</h1>
        <?php 
            $inicio = date('m-d-Y', strtotime('-7 days'));
            $fim = date('m-d-Y');
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados['value'][0]['cotacaoCompra'];

            $valor = $_POST['valor'];
            $converte = $valor / $cotacao;
            $converte_formatado = number_format($converte, 2, ',', '.');

            echo "Seus R$ $valor equivalem a <strong>U$ $converte_formatado</strong></p>";
        ?>
        <button onclick="history.back()">Voltar</button>
    </main>
</body>
</html>