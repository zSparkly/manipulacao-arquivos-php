
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
        <h1>Tabuada:</h1>
    </header>
    <main>
    <?php

    function calcular_tabuada($numero) {
        $arquivo = 'tabuada.txt';
        
    
        $file = fopen($arquivo, 'w');
        
        
        if ($file === false) {
            die('Não foi possível abrir o arquivo.');
        }

    
        $conteudo = "Tabuada do $numero:\n";
        
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $i * $numero;
            $conteudo .= "$i * $numero = $resultado\n";
        }
        
    
        fwrite($file, $conteudo);
        
        
        fclose($file);
    }

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numero'])) {
        $numero = (int) $_POST['numero'];
        calcular_tabuada($numero);

        
        $arquivo = 'tabuada.txt';
        if (file_exists($arquivo)) {
            echo "<pre>" . file_get_contents($arquivo) . "</pre>";
        } else {
            echo 'Erro ao abrir o arquivo.';
        }
    } else {
        echo 'Por favor, forneça um número.';
    }
    ?>
        
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>
