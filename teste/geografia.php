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
            'pergunta' => 'Qual é a capital da Bahia',
            'resposta' => 'Salvador.'
        ),
        array(
            'pergunta' => 'Qual é a diferença entre latitude e altitude',
            'resposta' => 'Enquanto a altitude corresponde à elevação de uma área com relação ao nível do mar, a latitude diz respeito à posição de uma área na superfície terrestre em relação ao paralelo de 0°, que é a linha do Equador..'
        ),
        array(
            'pergunta' => 'O que é a geopolítica',
            'resposta' => 'A Geopolítica é uma área de estudo que analisa as relações entre os países e territórios do mundo.'
        ),
        array(
            'pergunta' => 'Defina o que foi a Primavera Arábe',
            'resposta' => 'A Primavera Árabe foi uma série de protestos de rua que aconteceram nos países árabes do norte da África e no Oriente Médio, a partir de 2010.'
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