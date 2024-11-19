<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estações do Ano</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <h1>Descubra a Estação do Ano</h1>
        <form method="POST">
            <label for="data">Escolha o dia e mês:</label>
            <input type="date" id="data" name="data" required>
            <button type="submit">Ver Estação</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST['data'];
            $diaMes = date('m-d', strtotime($data));

            // Definir as estações com base no hemisfério sul
            if ($diaMes >= '12-21' || $diaMes <= '03-20') {
                $estacao = "Verão";
                $imagem = "imagens/verao.jpg";
            } elseif ($diaMes >= '03-21' && $diaMes <= '06-20') {
                $estacao = "Outono";
                $imagem = "imagens/outono.jpg";
            } elseif ($diaMes >= '06-21' && $diaMes <= '09-20') {
                $estacao = "Inverno";
                $imagem = "imagens/inverno.jpg";
            } else {
                $estacao = "Primavera";
                $imagem = "imagens/primavera.jpg";
            }

            echo "<div class='resultado'>
                    <h2>Estação: $estacao</h2>
                    <img src='$imagem' alt='$estacao'>
                  </div>";
        }
        ?>
    </div>
</body>
</html>
