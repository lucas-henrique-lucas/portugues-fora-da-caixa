<?php
require '../../backend/db.php';

$result = $conn->query("SELECT id, nome, path FROM 8ef_portugues");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <title>Português Fora da Caixa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/classes.css">
    <script src="../../app/menu.js" defer></script>
    <script src="../../app/funcionalidades.js" defer></script>
</head>

<body>
    <?php include '../../includes/header.php'; ?>
    <main id="apresentacao" class="apresentacao">
        <h1 class="apresentacao__titulo">Língua Portuguesa – <span>8º ano EF2</span></h1>
    </main>
    <section class="plano_de_curso">
        <h2 class="titulo_sessao"><span class="linha"></span>plano de curso</h2>
        <div id="plano_de_curso">
            <div class="plano_de_curso__unidade">
                <button class="unidade__button aberta" data-target="i-unidade">i unidade</button>
                <button class="unidade__button" data-target="ii-unidade">ii unidade</button>
                <button class="unidade__button" data-target="iii-unidade">iii unidade</button>
            </div>
            <article id="i-unidade" class="plano_de_curso__conteudo aberta">
                <h2 class="plano_de_curso__titulo">Unidade I <span>- Estruturação da Língua e Interpretação</span></h2>
                <div class="linha_do_tempo">
                    <div class="step" data-step="Conteúdos">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Conteúdos</h2>
                            <h3>1. Estrutura e formação de palavras</h3>
                            <h3>2. O sujeito indeterminado e oração sem sujeito</h3>
                            <h3>3. Vozes do verbo</h3>
                            <h3>4. Predicativo do objeto e predicado verbo-nominal</h3>
                            <h3>5. Interpretação de texto</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Paradidático">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Paradidático</h2>
                            <h3>A Árvore que Dava Dinheiro</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Avaliação">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Avaliação</h2>
                            <h3>Vistos – 1,0 ponto</h3>
                            <h3>Qualitativo – 1,0 ponto</h3>
                            <h3>Teste em dupla (V ou F – assunto 1) – 2,0 pontos</h3>
                            <h3>Adaptação teatral (capítulos do paradidático) – 2,0 pontos</h3>
                            <h3>Simulado – 4,0 pontos</h3>
                        </div>
                    </div>
                </div>
            </article>
            <article id="ii-unidade" class="plano_de_curso__conteudo gaveta">
                <h2 class="plano_de_curso__titulo">Unidade II <span>- Estruturas Textuais e Estratégias de Expressão</span></h2>
                <div class="linha_do_tempo">
                    <div class="step" data-step="Conteúdos">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Conteúdos</h2>
                            <h3>1. Complemento nominal</h3>
                            <h3>2. Modalização</h3>
                            <h3>3. Estratégias de generalização e impessoalização no texto</h3>
                            <h3>4. Aposto e vocativo</h3>
                            <h3>5. Interpretação de texto</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Paradidático">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Paradidático</h2>
                            <h3>O Gato Malhado e a Andorinha Sinhá</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Avaliação">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Avaliação</h2>
                            <h3>Vistos – 1,0 ponto</h3>
                            <h3>Qualitativo – 1,0 ponto</h3>
                            <h3>Roda de leitura – 2,0 pontos</h3>
                            <h3>Paródia (explicando tópicos de língua) – 2,0 pontos</h3>
                            <h3>Simulado – 4,0 pontos</h3>
                        </div>
                    </div>
                </div>
            </article>
            <article id="iii-unidade" class="plano_de_curso__conteudo gaveta">
                <h2 class="plano_de_curso__titulo">Unidade III <span>- Estruturas Sintáticas e Reflexão</span></h2>
                <div class="linha_do_tempo">
                    <div class="step" data-step="Conteúdos">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Conteúdos</h2>
                            <h3>1. O modo imperativo</h3>
                            <h3>2. Pontuação – A vírgula entre os termos da oração</h3>
                            <h3>3. Conjunções coordenativas</h3>
                            <h3>4. Conjunções subordinativas</h3>
                            <h3>5. Período simples e período composto</h3>
                            <h3>6. Período composto por coordenação</h3>
                            <h3>7. Período composto por subordinação</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Paradidático">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Paradidático</h2>
                            <h3>O Diário de Anne Frank</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Avaliação">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Avaliação</h2>
                            <h3>Diário escrito com reflexões sobre o paradidático – 2,0 pontos</h3>
                            <h3>Teste estilo “Identifique os erros” – 2,0 pontos</h3>
                            <h3>Pôster de interpretação do paradidático – 2,0 pontos</h3>
                            <h3>Simulado – 4,0 pontos</h3>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <hr>
    </section>
    <section class="materiais">
        <h2 class="titulo_sessao"><span class="linha"></span>materiais de aula</h2>
        <div id="materiais">
        <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nome do arquivo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($file = $result->fetch_assoc()): ?>
                        <tr>
                        <td><?= $file['id'] ?></td>
                        <td><?= $file['nome'] ?></td>
                        <td>
                            <a class='baixar' href='../../backend/download.php?id=<?= $file['id'] ?>&table=8ef_portugues'>
                                Baixar
                            </a>
                        </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <hr>
    </section>
    <section id="bibliografia">
        <h2 class="titulo_sessao"><span class="linha"></span>Bibliografia</h2>
        <div class="bibliografia">
            <h2>Livros</h2>
            <ul>
                <li><strong>BECHARA, Evanildo.</strong> <em>Moderna Gramática Portuguesa</em>. Rio de Janeiro: Nova Fronteira, 2009.</li>
                <li><strong>CEREJA, William; VIANNA, Carolina Dias.</strong> <em>Gramática: texto, reflexão e uso</em>. Volume único. São Paulo: Atual, 2020.</li>
                <li><strong>CUNHA, Celso; CINTRA, Lindley.</strong> <em>Nova Gramática do Português Contemporâneo</em>. Rio de Janeiro: Lexikon, 2008.</li>
                <li><strong>KURY, Adriano da Gama.</strong> <em>Português Básico e Essencial</em>. Rio de Janeiro: Lexikon, 2013.</li>
                <li><strong>PESTANA, Fernando.</strong> <em>A Gramática para Concursos Públicos: um guia completo e prático</em>. 4. ed. Rio de Janeiro: Forense; São Paulo: Método, 2019.</li>
            </ul>
            <h2>Sites e Recursos Online</h2>
            <ul>
                <li><strong>DIANA, Daniela.</strong> <em>Formação de Palavras</em>. Toda Matéria, [s.d.]. Disponível em:<a href="https://www.todamateria.com.br/formacao-de-palavras/"> https://www.todamateria.com.br/formacao-de-palavras/</a>. Acesso em: 9 jan. 2025.</li>
                <li><strong>MENDES, Walter.</strong> <em>Estrutura das Palavras</em>. Disponível em: <a href="https://www.portugues.com.br/gramatica/estrutura-das-palavras-.html">https://www.portugues.com.br/gramatica/estrutura-das-palavras-.html</a>. Acesso em: 9 jan. 2025.</li>
            </ul>
        </div>
        <hr>
    </section>
    <?php include '../../includes/footer.php'; ?>
</body>

</html>