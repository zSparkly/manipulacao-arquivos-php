
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
// Função para calcular a tabuada e salvar no arquivo
    function calcular_tabuada($numero) {
        $arquivo = 'tabuada.txt';
        
        // Abrir o arquivo para escrita (substituindo o conteúdo anterior)
        $file = fopen($arquivo, 'w');
        
        // Checa se o arquivo foi aberto corretamente
        if ($file === false) {
            die('Não foi possível abrir o arquivo.');
        }

        // Variável para armazenar o conteúdo da tabuada
        $conteudo = "Tabuada do $numero:\n";
        
        // Calcular a tabuada de 1 a 10
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $i * $numero;
            $conteudo .= "$i * $numero = $resultado\n";
        }
        
        // Escrever a tabuada no arquivo
        fwrite($file, $conteudo);
        
        // Fechar o arquivo
        fclose($file);
    }

    // Checa se o formulário foi enviado com um número
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numero'])) {
        $numero = (int) $_POST['numero'];
        calcular_tabuada($numero);

        // Ler o conteúdo do arquivo e exibir
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