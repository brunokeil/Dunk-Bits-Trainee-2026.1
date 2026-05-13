const pontos = document.querySelectorAll(".ponto");
const setaEsquerda = document.querySelector(".seta-esquerda");
const setaDireita = document.querySelector(".seta-direita");
const cards = document.querySelectorAll(".card");

let paginaAtual = 0;
const cardsPorPagina = 6;

function atualizarPagina(indexDaPagina) {
  pontos.forEach((ponto, index) => {
    const icone = ponto.querySelector("span");

    if (index === indexDaPagina) {
      ponto.classList.add("ativo");
      icone.textContent = "radio_button_checked";
    } else {
      ponto.classList.remove("ativo");
      icone.textContent = "radio_button_unchecked";
    }
  });

  const inicio = indexDaPagina * cardsPorPagina;
  const fim = inicio + cardsPorPagina;

  cards.forEach((card, index) => {
    if (index >= inicio && index < fim) {
      card.style.display = "flex";
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
