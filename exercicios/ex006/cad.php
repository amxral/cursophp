<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resposta</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
        $nome = $_GET["nome"] ?? "";
        $sobrenome = $_GET["sobrenome"] ?? "";

        echo ("<p>É um prazer em te conhecer, <strong>$nome $sobrenome</strong>! Este é meu site.</p>");
        ?>
        <p style="text-align: center;"><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>