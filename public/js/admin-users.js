//const imgs = document.querySelectorAll(".ponto");
const botaoEsq = document.querySelector(".seta-esquerda");
const botaoDir = document.querySelector(".seta-direita");
const pag = document.querySelector(".visao-pag");
const btnOpts = document.querySelectorAll(".trespontos")

let linhas = document.querySelectorAll(".row-tabela")


const limite = 5;
let atual = 0;

mostrarPagina(0);

function mostrarPagina(pag){
    let inicio = limite*pag;
    let final = inicio + limite;

    linhas.forEach((l, idx) => {
        if(idx >= inicio && idx < final){
            l.style.display = "";
        } else {
            l.style.display = "none";
        }
    })
}

function mudarPaginacaoDir(){
    atual = (atual + 1) % 3;
    pag.textContent = atual + 1
    mostrarPagina(atual);

}

function mudarPaginacaoEsq(){
    if (atual == 0){
        atual = 3;
    } else {
        atual = atual - 1;
    }

    mostrarPagina(atual);
    pag.textContent = atual + 1
}

botaoEsq.addEventListener("click",()=> {
    console.log("BotaoEsq clicado");
    mudarPaginacaoEsq()

})

botaoDir.addEventListener("click",()=> {
    console.log("BotaoDir clicado");
    mudarPaginacaoDir()
})

btnOpts.forEach((botao) => {
    botao.addEventListener('click', () => {
        const container = botao.parentElement;
        const menu = container.querySelector(".dropdownMenuPosts");
        console.log(container);
        console.log(menu);
        menu.classList.toggle("ativo");
    })
})



