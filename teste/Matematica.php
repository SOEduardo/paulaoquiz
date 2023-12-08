<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolução de Questões</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Array de questões e resoluções (poderia ser carregado de um banco de dados)
    $questoes = array(
        array(
            'pergunta' => 'Quanto é 4 x 5',
            'resposta' => '4 x 5 = 20.'
        ),
        array(
            'pergunta' => 'Quanto é 10 - 2',
            'resposta' => '10 - 2 = 8.'
        ),
        array(
            'pergunta' => '4 x 2 + 1 - 5',
            'resposta' => '4 x 2 + 1 - 5 = 4.'
        ),
        array(
            'pergunta' => 'Quanto é 5 + 3?',
            'resposta' => '5 + 3 = 8.'
        ),
        // Adicione mais questões conforme necessário
    );

    // Obtém um índice aleatório para exibir uma questão aleatória
    $indice_questao = array_rand($questoes);

    // Exibe a questão e a resposta
    echo '<h2>' . $questoes[$indice_questao]['pergunta'] . '</h2>';
    echo '<p>' . $questoes[$indice_questao]['resposta'] . '</p>';
    ?>
</div>

</body>
</html>