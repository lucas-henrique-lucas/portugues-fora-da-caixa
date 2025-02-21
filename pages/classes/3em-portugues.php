<?php
require '../../backend/db.php';

$result = $conn->query("SELECT id, nome, path FROM 3em_portugues");
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
        <h1 class="apresentacao__titulo">Língua Portuguesa – <span>3º ano EM</span></h1>
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
                <h2 class="plano_de_curso__titulo">Unidade I <span>- Vanguardas Europeias e Modernismo Brasileiro</span></h2>
                <div class="linha_do_tempo">
                    <div class="step" data-step="Literatura">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Literatura</h2>
                            <h3>Vanguardas Europeias</h3>
                            <ul>
                                <li>Cubismo</li>
                                <li>Futurismo</li>
                                <li>Expressionismo</li>
                                <li>Dadaísmo</li>
                                <li>Surrealismo</li>
                            </ul>
                            <h3>Pré-Modernismo no Brasil</h3>
                            <ul>
                                <li>Lima Barreto</li>
                                <li>Lima Barreto</li>
                            </ul>
                            <h3>Modernismo no Brasil</h3>
                            <ul>
                                <li>Manifesto Pau-Brasil</li>
                                <li>Manifesto Antropofágico</li>
                                <li>Manifesto Verde-Amarelo</li>
                                <li>Escola da Anta</li>
                            </ul>
                        </div>
                    </div>
                    <div class="step" data-step="Língua">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Língua</h2>
                            <h3>Questões contemporâneas da Língua Portuguesa no Brasil</h3>
                            <ul>
                                <li>Linguagem neutra</li>
                                <li>Tecnologias digitais e escrita</li>
                                <li>Toponímia e variação no Oeste Baiano</li>
                                <li>Língua como prática social: língua, cultura e sociedade</li>
                            </ul>
                        </div>
                    </div>
                    <div class="step" data-step="Paradidáticos">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Paradidáticos</h2>
                            <h3>Triste Fim de Policarpo Quaresma</h3>
                            <h3>Os Sertões</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Avaliação">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Avaliação</h2>
                            <h3>Seminário interativo (pontos de língua) – 2,0</h3>
                            <h3>Produção textual + explicação (vanguardas – em grupos) – 1,5</h3>
                            <h3>Debate regrado (paradidáticos) – 1,5</h3>
                            <h3>Simulado (todos os assuntos, focando em Modernismo) – 4,0</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Aulas (1º Bloco)">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Aulas (1º Bloco)</h2>
                            <h3>1. Apresentação da dinâmica da unidade; avaliação diagnóstica</h3>
                            <h3>2. Contexto histórico das vanguardas europeias – Parte 1 / Divisão dos grupos</h3>
                            <h3>3. Contexto histórico das vanguardas europeias – Parte 2 / Futurismo – Parte 1</h3>
                            <h3>4. Cubismo e Expressionismo – Parte 1</h3>
                            <h3>5. Cubismo e Expressionismo – Parte 2</h3>
                            <h3>6. Movimento Dadaísta</h3>
                            <h3>7. Surrealismo</h3>
                            <h3>8. Produção textual inspirada nas Vanguardas (em grupos)</h3>
                            <h3>9. Exposição das produções + feedback</h3>
                        </div>
                    </div>
                </div>
            </article>
            <article id="ii-unidade" class="plano_de_curso__conteudo gaveta">
                <h2 class="plano_de_curso__titulo">Unidade II <span>- O Romance Regionalista do Modernismo Brasileiro</span></h2>
                <div class="linha_do_tempo">
                    <div class="step" data-step="Literatura">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Literatura</h2>
                            <h3>Autores Regionalistas</h3>
                            <ul>
                                <li>Graciliano Ramos</li>
                                <li>Rachel de Queiroz</li>
                                <li>José Lins do Rego</li>
                                <li>Jorge Amado</li>
                                <li>Érico Veríssimo</li>
                            </ul>
                            <h3>Autores Modernistas</h3>
                            <ul>
                                <li>Carlos Drummond de Andrade</li>
                                <li>Cecília Meireles</li>
                                <li>Vinícius de Morais</li>
                            </ul>
                            <h3>Prosa Pós-Moderna</h3>
                            <ul>
                                <li>Clarice Lispector</li>
                                <li>Guimarães Rosa</li>
                            </ul>
                        </div>
                    </div>
                    <div class="step" data-step="Língua">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Língua</h2>
                            <h3>Semântica:</h3>
                            <ul>
                                <li>significação, conotação e denotação, ambiguidades e polissemia.</li>
                            </ul>
                            <h3>Estilística:</h3>
                            <ul>
                                <li>figuras de linguagem e seus efeitos nos textos.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="step" data-step="Paradidáticos">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Paradidáticos</h2>
                            <h3>Cacau</h3>
                            <h3>O Quinze</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Avaliação">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Avaliação</h2>
                            <h3>Qualitativo (diário de bordo, online) – 1,0</h3>
                            <h3>Episódio Podcast (autores regionalistas) – 2,0</h3>
                            <h3>Teste (V ou F – questões de língua) – 1,5</h3>
                            <h3>Flapbook (paradidáticos) – 1,5</h3>
                            <h3>Simulado – 4,0</h3>
                        </div>
                    </div>
                </div>
            </article>
            <article id="iii-unidade" class="plano_de_curso__conteudo gaveta">
                <h2 class="plano_de_curso__titulo">Unidade III <span>- Literatura Contemporânea</span></h2>
                <div class="linha_do_tempo">
                    <div class="step" data-step="Literatura">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Literatura</h2>
                            <h3>Contextos de produção contemporâneos</h3>
                            <h3>Recepção e crítica</h3>
                            <h3>Censura literária</h3>
                            <h3>Obras de vestibular</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Língua">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Língua</h2>
                            <h3>Argumentação e retórica</h3>
                            <ul>
                                <li>Estratégias argumentativas</li>
                                <li>Falácias</li>
                                <li>Construção argumentativa</li>
                            </ul>
                        </div>
                    </div>
                    <div class="step" data-step="Paradidáticos">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Paradidáticos</h2>
                            <h3>Olhos D’água</h3>
                            <h3>Salvar o Fogo</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Avaliação">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Avaliação</h2>
                            <h3>Sarau Literário: Vozes de Resistência (casos de censura literária) – 3,0</h3>
                            <h3>Ensaio (algum ponto dos paradidáticos) – 3,0</h3>
                            <h3>Simulado – 4,0</h3>
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
                            <a class='baixar' href='../../backend/download.php?id=<?= $file['id'] ?>&table=3em_portugues'>
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
                <li><strong>BARRETO, Lima.</strong> <em>Triste fim de Policarpo Quaresma</em>. Rio de Janeiro: Editora Record, s/d.</li>
                <li><strong>BARTHES, Roland.</strong> [Faltando informações sobre a obra]</li>
                <li><strong>BOSI, Alfredo.</strong> <em>História concisa da literatura brasileira</em>. São Paulo: Cultrix, 1995.</li>
                <li><strong>CUNHA, Euclides da.</strong> <em>Os Sertões</em>. Rio de Janeiro: Ediouro, 2003.</li>
                <li><strong>TELES, Gilberto Mendonça.</strong> <em>Vanguarda europeia e Modernismo brasileiro</em>. 10ª ed. Rio de Janeiro: Record, 1987.</li>
            </ul>
            <h2>Artigos e Revistas Acadêmicas</h2>
            <ul>
                <li><strong>BASTOS, Dau.</strong> <em>Viva a vanguarda: literatura brasileira contemporânea à luz da ruptura</em>. Revista Fórum de Literatura Brasileira Contemporânea, v. 1, n. 1, 2009. DOI: <a href="https://doi.org/10.35520/flbc.2009.v1n1a17257">10.35520/flbc.2009.v1n1a17257</a>. Acesso em: 2 jan. 2025.</li>
                <li><strong>CUNHA, Leandro Reinaldo da.</strong> <em>Linguagem neutra: ofensa à língua portuguesa ou preconceito velado?</em> Revista Direito e Sexualidade, Salvador, v. 2, n. 2, jul./dez. 2021.</li>
                <li><strong>GUIMARÃES, V. de S.</strong> <em>Inclusão na língua: as tentativas de neutralidade de gênero no português brasileiro</em>. Revista da ABRALIN, v. 19, n. 2, p. 1–5, 2020. DOI: <a href="#">10.25189/rabralin.v19i2.1627</a>. Acesso em: 2 jan. 2025.</li>
                <li><strong>MERINO, X. D.</strong> <em>Cubismo Literário: Da Forma à Poesia</em>. Revista de Literatura, História e Memória, v. 7, n. 10, 2011. DOI: <a href="https://doi.org/10.48075/rlhm.v7i10.5902">10.48075/rlhm.v7i10.5902</a>. Acesso em: 2 jan. 2025.</li>
            </ul>
            <h2>Sites e Recursos Online</h2>
            <ul>
                <li><strong>AIDAR, Laura.</strong> <em>Vanguardas Europeias</em>. Toda Matéria, [s.d.]. Disponível em: <a href="https://www.todamateria.com.br/vanguardas-europeias/">https://www.todamateria.com.br/vanguardas-europeias/</a>. Acesso em: 4 jan. 2025.</li>
            </ul>
            <h2>Documentários e Vídeos</h2>
            <ul>
                <li><em>Documentário Os Sertões</em>. Disponível em: <a href="https://www.youtube.com/watch?v=mOLUR1K5WH0">https://www.youtube.com/watch?v=mOLUR1K5WH0</a>. Acesso em: 6 jan. 2025.</li>
                <li><em>LÍNGUA, gramática, gênero e inclusão</em>. Simpósio apresentado por Raquel Freitag [s.l., s.n.], 2020. 1 vídeo (2h 50min 05s). Publicado pelo canal da Associação Brasileira de Linguística. Disponível em: <a href="https://www.youtube.com/watch?v=_AdQFP3ssAY">https://www.youtube.com/watch?v=_AdQFP3ssAY</a>. Acesso em: 2 jan. 2025.</li>
            </ul>
        </div>
        <hr>
    </section>
    <?php include '../../includes/footer.php'; ?>
</body>

</html>