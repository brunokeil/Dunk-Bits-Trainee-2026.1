const imgs = document.querySelectorAll(".ponto");
const botaoEsq = document.querySelector(".seta-esquerda");
const botaoDir = document.querySelector(".seta-direita")

let atual = 0
let anterior = atual

function mudarPaginacaoDir(){
    atual = (atual + 1) % 3;
    imgs[atual].src = "/public/assets/ponto-ativo.png";
    imgs[anterior].src = "/public/assets/ponto-inativo.png";
    anterior = atual;

}

function mudarPaginacaoEsq(){
    if (atual == 0){
        atual = 2;
    } else {
        atual = atual - 1;
    }

    imgs[atual].src = "/public/assets/ponto-ativo.png";
    imgs[anterior].src = "/public/assets/ponto-inativo.png";
    anterior = atual;
}

botaoEsq.addEventListener("click",()=> {
    console.log("BotaoEsq clicado");
    mudarPaginacaoEsq()
})

botaoDir.addEventListener("click",()=> {
    console.log("BotaoDir clicado");
    mudarPaginacaoDir()
})
