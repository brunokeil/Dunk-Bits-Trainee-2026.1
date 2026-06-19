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
      if (icone) icone.setAttribute("name", "radio-button-on-outline");
    } else {
      ponto.classList.remove("ativo");
      if (icone) icone.setAttribute("name", "radio-button-off-outline");
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

atualizarPagina(0);

/* Função do Filtro */
document.addEventListener("DOMContentLoaded", () => {
  const botaoFiltro = document.getElementById("botao-filtro");
  const menuFiltros = document.getElementById("filtros-opcoes");

  botaoFiltro.addEventListener("click", (event) => {
    const parametrosUrl = new URLSearchParams(window.location.search);

    if (parametrosUrl.has("filtro")) {
      event.preventDefault();
      menuFiltros.style.transition = "none";
      menuFiltros.style.animation = "none";
      menuFiltros.style.display = "none";

      window.location.href = "/lista-posts";
      return;
    }
    menuFiltros.classList.toggle("active");
  });
});

/* Função Barra Pesquisar - Limita o Enter */
const barraPesquisar = document.getElementById("search-text");
const formPesquisa = document.getElementById("form-search");
const termoPesquisado = barraPesquisar.value;

document.addEventListener("keydown", (event) => {
  if (event.key === "Enter") {
    if (event.target !== barraPesquisar) {
      event.preventDefault();
      return;
    }
    const termoPesquisado = barraPesquisar.value;

    if (termoPesquisado === "Vamos Dunkar") {
      event.preventDefault();
      window.location.href = "/easter-egg";
    } else {
      event.preventDefault();
      formPesquisa.submit();
    }
  }
});
