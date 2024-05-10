<!DOCTYPE html>
<html lang="pt-br">
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
            //Cotação copiada do google
            $cotacao = 5.16;
            //Quanto $$ você tem?
            $real = $_GET['din'];
            //Equivalêcia em dólar
            $dolar = $real / $cotacao;
            //Formatação de moedas com Internacionalização
            //Biblioteca intl (Internacionalização PHP)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>