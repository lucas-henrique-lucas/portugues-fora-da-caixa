apliarImagem();
carrossel();
botoesGuia();
linhaHorizontal();
linksIndisponivel();

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
  imagens.forEach((imagem) => {
    imagem.addEventListener("click", ampliarImagem);
  });
}

function carrossel() {
  const imagem = document.querySelectorAll(".carrossel img");
  let indiceAtual = 0;

  // Função para alternar entre as imagens
  function trocarImagem() {
    imagem[indiceAtual].classList.remove("active"); // Remove a classe ativa da imagem atual
    indiceAtual = (indiceAtual + 1) % imagem.length; // Vai para a próxima imagem (volta ao início se estiver na última)
    imagem[indiceAtual].classList.add("active"); // Adiciona a classe ativa à nova imagem
  }

  // Troca a imagem a cada 4 segundos
  setInterval(trocarImagem, 4000);
}

function botoesGuia() {
  const buttons = document.querySelectorAll(".unidade__button");
  const gaveta = document.querySelectorAll(".plano_de_curso__conteudo");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      buttons.forEach((btn) => btn.classList.remove("aberta"));
      gaveta.forEach((section) => section.classList.remove("aberta"));

      button.classList.add("aberta");
      document.getElementById(button.dataset.target).classList.add("aberta");
    });
  });
}

function linhaHorizontal() {
  window.addEventListener("scroll", () => {
    const steps = document.querySelectorAll(".step");
    const windowHeight = window.innerHeight;

    steps.forEach((step) => {
      const rect = step.getBoundingClientRect();
      if (rect.top >= 0 && rect.top <= windowHeight / 2) {
        step.classList.add("active");
      } else {
        step.classList.remove("active");
      }
    });
  });
}

function linksIndisponivel() {
  // Seleciona todos os links com href contendo "#"
  const links = document.querySelectorAll('a[href*="#"]');

  // Torna os links "inclicáveis"
  links.forEach((link) => {
    link.addEventListener("click", (event) => {
      event.preventDefault(); // Evita o comportamento padrão do clique
      console.log(`Link inclicável: ${link.href}`);
    });
  });
}
