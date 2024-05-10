<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Strings em PHP</h1>
    <?php 
    $prog = "PHP\u{1F418}";
    echo '$prog';
    ?>
    <h2>Strings com constantes</h2>
    <?php 
    const ESTADO = "RN";
    echo "Moro no " . ESTADO;
    ?>
    <h2>Sequência de escape dentro de strings</h2>
    <?php 
    $nome = "Rodrigo";
    $sobrenome = "Nogueira";

    echo "$nome \"Minotauro\" $sobrenome";
    ?>
    <h2>Sitaxe Heredoc</h2>
    <?php 
    $curso = "PHP";
    $ano = date('Y');

    echo <<< macaco
        Estou estudando 
            $curso em $ano!
    macaco;

    echo <<< 'macaco'
        Estou estudando 
            $curso em $ano!
    macaco;

    ?>
</body>
</html>