<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Frases inseridas:</h1>
    </header>
    <main>
        <?php
        
        $arquivo = "frases.txt";

        
        if (file_exists($arquivo)) {           
            $conteudo = file_get_contents($arquivo);
            
            echo nl2br($conteudo);
        } else {
            echo "Nenhuma frase inserida.";
        }
            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>

