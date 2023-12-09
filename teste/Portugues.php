<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Português</title>
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
            'pergunta' => 'O que é uma sílaba',
            'resposta' => 'As sílabas são fonemas ou grupos de fonemas que são pronunciados por uma única emissão de voz e cuja base é sempre uma vogal.'
        ),
        array(
            'pergunta' => 'O que foi a escola literária do Romanticismo',
            'resposta' => 'O romantismo é um estilo de época. Apesar de ter surgido na Alemanha, o fato histórico que motivou o aparecimento desse movimento artístico foi a Revolução Francesa, um acontecimento importante para toda a Europa. Ele é caracterizado pelo subjetivismo, excesso sentimental, idealização e fuga da realidade.'
        ),
        array(
            'pergunta' => 'O que é pleonasmo',
            'resposta' => 'O pleonasmo se caracteriza por uma superabundância de palavras que expressam uma mesma ideia em uma frase.'
        ),
        array(
            'pergunta' => 'Diga um exemplo de hipérbole',
            'resposta' => 'Eu estou congelando de frio!'
        ),
        array(
            'pergunta' => 'O que é um advérbio ',
            'resposta' => 'O advérbio é a palavra que indica uma circunstância (modo, lugar, tempo). Ele pode modificar um verbo, um adjetivo ou outro advérbio.'
        ),
        array(
            'pergunta' => 'Defina a diferença entre mas e mais ',
            'resposta' => 'mas é usado com sentido de oposição, sendo sinônimo de expressões como porém, contudo e todavia. Já o termo mais se refere, principalmente, a ideia de quantidade, aumento de alguma coisa.'
        ),
        array(
            'pergunta' => 'O que é o Trovadorismo',
            'resposta' => 'Trovadorismo é um estilo de época surgido na Idade Média. Nesse período histórico, predominava o teocentrismo (a ideia de que Deus é o centro de tudo), pois a Igreja Católica, com poderio econômico e político, exercia total domínio no Ocidente.'
        ),
        // Adicione mais questões conforme necessário
    );

    // Obtém um índice aleatório para exibir uma questão aleatória
    $indice_questao = array_rand($questoes);
    $indice_questao2 = array_rand($questoes);
    $indice_questao3 = array_rand($questoes);
    while($indice_questao2 == $indice_questao || $indice_questao2 == $indice_questao3) {
        $indice_questao2 = array_rand($questoes);
        if($indice_questao3 == $indice_questao) 
        $indice_questao3 = array_rand($questoes);
    }

    // Exibe a questão e a resposta
    echo '<h2>' . $questoes[$indice_questao]['pergunta'] . '</h2>';
    echo '<p>' . $questoes[$indice_questao]['resposta'] . '</p>';
    echo '<h2>' . $questoes[$indice_questao2]['pergunta'] . '</h2>';
    echo '<p>' . $questoes[$indice_questao2]['resposta'] . '</p>';
    echo '<h2>' . $questoes[$indice_questao3]['pergunta'] . '</h2>';
    echo '<p>' . $questoes[$indice_questao3]['resposta'] . '</p>';
    ?>
</div>

</body>
</html>