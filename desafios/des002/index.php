<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Número Aleatório</title>
</head>
<body>
    <main>
        <h1>Gerando números aleatórios</h1>
        <p>
            <?php 
            $min = 0;
            $max = 10;

            $num = mt_rand($min, $max);

            echo "Gerando um número aleatório entre <strong>$min</strong> e <strong>$max</strong>";
            echo "<br>O número gerado foi <strong>$num</strong>";
            ?>
        </p>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>