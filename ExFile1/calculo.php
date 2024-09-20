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
        <h1>Situação do Aluno</h1>
    </header>
    <main>
        <?php
            $arquivo = "frases.txt";
            $frases = [
                $_REQUEST["frase1"],
                $_REQUEST["frase2"],
                $_REQUEST["frase3"]
            ];
            $file = fopen($arquivo, "w");

            if ($file) {
                foreach ($frases as $frase) {
                    fwrite($file, $frase . PHP_EOL);
                }
            
            fclose($file);
            echo "Arquivo gerado com sucesso!";
            } else {
            echo "Erro ao criar o arquivo.";
            }
            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>