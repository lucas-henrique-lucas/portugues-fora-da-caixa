apliarImagem()
carrossel()

function apliarImagem() {
    // Cria dinamicamente o overlay
    const overlay = document.createElement("div");
    overlay.classList.add("overlay");
    
    // Adiciona a imagem ampliada ao overlay
    const imagemAmpliada = document.createElement("img");
    overlay.appendChild(imagemAmpliada);
    
    // Adiciona o overlay ao corpo do documento
    document.body.appendChild(overlay);
    
    // Função para ampliar a imagem
    function ampliarImagem(event) {
        const src = event.target.src; // Obtém o caminho da imagem clicada
        imagemAmpliada.src = src; // Define a imagem no overlay
        overlay.classList.add("active");
    }
    
    // Fecha o overlay ao clicar fora da imagem
    overlay.addEventListener("click", () => {
        overlay.classList.remove("active");
    });
    
    // Seleciona todas as imagens e adiciona o evento de clique
    const imagens = document.querySelectorAll(".zoom-image");
    imagens.forEach(imagem => {
        imagem.addEventListener("click", ampliarImagem);
    });
}

function carrossel() {
    const imagem = document.querySelectorAll('.carrossel img');
    let indiceAtual = 0;

    // Função para alternar entre as imagens
    function trocarImagem() {
        imagem[indiceAtual].classList.remove('active'); // Remove a classe ativa da imagem atual
        indiceAtual = (indiceAtual + 1) % imagem.length; // Vai para a próxima imagem (volta ao início se estiver na última)
        imagem[indiceAtual].classList.add('active'); // Adiciona a classe ativa à nova imagem
    }

    // Troca a imagem a cada 4 segundos
    setInterval(trocarImagem, 4000);
}