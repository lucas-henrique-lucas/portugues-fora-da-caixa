<?php
require '../../backend/db.php';

    $result = $conn->query("SELECT id, nome, path FROM 9ef_redacao");
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
    <link rel="stylesheet" href="/css/classes.css">
    <script src="/app/menu.js" defer></script>
    <script src="/app/funcionalidades.js" defer></script>
</head>

<body>
    <?php include '../../includes/header.php'; ?>
    <main id="apresentacao" class="apresentacao">
        <h1 class="apresentacao__titulo">Redação – <span>9º ano EF2</span></h1>
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
                <h2 class="plano_de_curso__titulo">Unidade I <span>- Gêneros Argumentativos e Ortografia</span></h2>
                <div class="linha_do_tempo">
                    <div class="step" data-step="Gêneros Textuais">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Gêneros Textuais</h2>
                            <h3>Editorial</h3>
                            <h3>Artigo de opinião</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Ortografia">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Ortografia</h2>
                            <h3>Plural dos substantivos e dos adjetivos compostos</h3>
                            <h3>Uso do "E" e do "I"</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Paradidático">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Paradidático</h2>
                            <h3>A Revolução dos Bichos – George Orwell</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Avaliação">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Avaliação</h2>
                            <h3>Editorial - Pós-verdade (Cap. 1 – Unidade 1) – 2,0 pontos</h3>
                            <h3>Artigo de opinião – Sobre o livro – 2,0 pontos</h3>
                            <h3>Teste (ortografia) – 2,0 pontos</h3>
                            <h3>Simulado – 4,0 pontos</h3>
                        </div>
                    </div>
                </div>
            </article>
            <article id="ii-unidade" class="plano_de_curso__conteudo gaveta">
                <h2 class="plano_de_curso__titulo">Unidade II <span>- Gêneros Literários e Ortografia</span></h2>
                <div class="linha_do_tempo">
                    <div class="step" data-step="Gêneros Textuais">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Gêneros Textuais</h2>
                            <h3>Poema</h3>
                            <h3>Paródia</h3>
                            <h3>Conto</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Ortografia">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Ortografia</h2>
                            <h3>Uso do "O" e do "U"</h3>
                            <h3>C, Ç ou SS</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Paradidático">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Paradidático</h2>
                            <h3>Alice no País das Maravilhas – Lewis Carroll</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Avaliação">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Avaliação</h2>
                            <h3>Seminário (análise de poema) – 2,0 pontos</h3>
                            <h3>Paródia (gravada) – 2,0 pontos</h3>
                            <h3>Adaptação teatral Alice no País das Maravilhas – 2,0 pontos</h3>
                            <h3>Simulado – 4,0 pontos</h3>
                        </div>
                    </div>
                </div>
            </article>
            <article id="iii-unidade" class="plano_de_curso__conteudo gaveta">
                <h2 class="plano_de_curso__titulo">Unidade III <span>- Gêneros Dissertativos e Questões Notacionais</span></h2>
                <div class="linha_do_tempo">
                    <div class="step" data-step="Gêneros Textuais">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Gêneros Textuais</h2>
                            <h3>Texto dissertativo-argumentativo</h3>
                            <h3>Debate regrado</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Ortografia">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Ortografia</h2>
                            <h3>Questões notacionais da língua</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Paradidático">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Paradidático</h2>
                            <h3>Querido Estudante Negro – Bárbara Carine</h3>
                        </div>
                    </div>
                    <div class="step" data-step="Avaliação">
                        <div class="circle"></div>
                        <div class="linha_do_tempo__conteudo">
                            <h2>Avaliação</h2>
                            <h3>Debate regrado (paradidático) – 2,5 pontos</h3>
                            <h3>Texto dissertativo-argumentativo – 2,0 pontos</h3>
                            <h3>Teste (questões notacionais) – 1,5 ponto</h3>
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
                            <a class='baixar' href='../../backend/download.php?id=<?= $file['id'] ?>&table=9ef_redacao'>
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
    <!-- <section id="bibliografia">
        <h2 class="titulo_sessao"><span class="linha"></span>Bibliografia</h2>
        <div class="bibliografia">
            <h2>Livros</h2>
            <ul>
                <li>BARRETO, Lima. Triste fim de Policarpo Quaresma. Rio de Janeiro: Editora Record, s/d.</li>
                <li>BARTHES, Roland. [Faltando informações sobre a obra]</li>
                <li>BOSI, Alfredo. História concisa da literatura brasileira. São Paulo: Cultrix, 1995.</li>
                <li>CUNHA, Euclides da. Os Sertões. Rio de Janeiro: Ediouro, 2003.</li>
                <li>TELES, Gilberto Mendonça. Vanguarda europeia e Modernismo brasileiro. 10ª ed. Rio de Janeiro: Record, 1987.</li>
            </ul>
            <h2>Artigos e Revistas Acadêmicas</h2>
            <ul>
                <li>BASTOS, Dau. Viva a vanguarda: literatura brasileira contemporânea à luz da ruptura. Revista Fórum de Literatura Brasileira Contemporânea, v. 1, n. 1, 2009. DOI: <a href="https://doi.org/10.35520/flbc.2009.v1n1a17257">10.35520/flbc.2009.v1n1a17257</a>. Acesso em: 2 jan. 2025.</li>
                <li>CUNHA, Leandro Reinaldo da. Linguagem neutra: ofensa à língua portuguesa ou preconceito velado? Revista Direito e Sexualidade, Salvador, v. 2, n. 2, jul./dez. 2021.</li>
                <li>GUIMARÃES, V. de S. Inclusão na língua: as tentativas de neutralidade de gênero no português brasileiro. Revista da ABRALIN, v. 19, n. 2, p. 1–5, 2020. DOI: <a href="#">10.25189/rabralin.v19i2.1627</a>. Acesso em: 2 jan. 2025.</li>
                <li>MERINO, X. D. Cubismo Literário: Da Forma à Poesia. Revista de Literatura, História e Memória, v. 7, n. 10, 2011. DOI: <a href="https://doi.org/10.48075/rlhm.v7i10.5902">10.48075/rlhm.v7i10.5902</a>. Acesso em: 2 jan. 2025.</li>
            </ul>
            <h2>Sites e Recursos Online</h2>
            <ul>
                <li>AIDAR, Laura. Vanguardas Europeias. Toda Matéria, [s.d.]. Disponível em: <a href="https://www.todamateria.com.br/vanguardas-europeias/">https://www.todamateria.com.br/vanguardas-europeias/</a>. Acesso em: 4 jan. 2025.</li>
            </ul>
            <h2>Documentários e Vídeos</h2>
            <ul>
                <li>Documentário Os Sertões. Disponível em: <a href="https://www.youtube.com/watch?v=mOLUR1K5WH0">https://www.youtube.com/watch?v=mOLUR1K5WH0</a>. Acesso em: 6 jan. 2025.</li>
                <li>LÍNGUA, gramática, gênero e inclusão. Simpósio apresentado por Raquel Freitag [s.l., s.n.], 2020. 1 vídeo (2h 50min 05s). Publicado pelo canal da Associação Brasileira de Linguística. Disponível em: <a href="https://www.youtube.com/watch?v=_AdQFP3ssAY">https://www.youtube.com/watch?v=_AdQFP3ssAY</a>. Acesso em: 2 jan. 2025.</li>
            </ul>
        </div>
        <hr>
    </section> -->
    <?php include '../../includes/footer.php'; ?>
</body>

</html>