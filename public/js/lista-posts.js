/* Função da Paginação */
const pontos = document.querySelectorAll(".ponto");
const setaEsquerda = document.querySelector(".seta-esquerda");
const setaDireita = document.querySelector(".seta-direita");
const cards = document.querySelectorAll(".card");

let paginaAtual = 0;
const cardsPorPagina = 6;

function atualizarPagina(indexDaPagina) {
  pontos.forEach((ponto, index) => {
    const icone = ponto.querySelector("ion-icon");

    if (index === indexDaPagina) {
      ponto.classList.add("ativo");
      if(icone) icone.setAttribute ("name", "radio-button-on-outline");
    } else {
      ponto.classList.remove("ativo");
      if(icone) icone.setAttribute ("name", "radio-button-off-outline");
    }
  });

  const inicio = indexDaPagina * cardsPorPagina;
  const fim = inicio + cardsPorPagina;

  cards.forEach((card, index) => {
    card.classList.remove("mostrar");

    if (index >= inicio && index < fim) {
      card.style.display = "flex";

      setTimeout(() => {
        card.classList.add("mostrar");
      }, 10);
    } else {
      card.style.display = "none";
    }
  });

  paginaAtual = indexDaPagina;
}

pontos.forEach((ponto, index) => {
  ponto.addEventListener("click", () => {
    atualizarPagina(index);
  });
});

setaDireita.addEventListener("click", () => {
  if (paginaAtual < pontos.length - 1) {
    atualizarPagina(paginaAtual + 1);
  }
});

setaEsquerda.addEventListener("click", () => {
  if (paginaAtual > 0) {
    atualizarPagina(paginaAtual - 1);
  }
});

atualizarPagina(0);

/* Função do Filtro */
document.addEventListener("DOMContentLoaded", () => {
  const botaoFiltro = document.getElementById("botao-filtro");
  const menuFiltros = document.getElementById("filtros-opcoes");

  botaoFiltro.addEventListener("click", () => {
    menuFiltros.classList.toggle("active");
  });
});
