//const imgs = document.querySelectorAll(".ponto");
const botaoEsq = document.querySelector(".seta-esquerda");
const botaoDir = document.querySelector(".seta-direita");
const pag = document.querySelector(".visao-pag");
const btnOpts = document.querySelectorAll(".trespontos")

let linhas = document.querySelectorAll(".row-tabela")


btnOpts.forEach((botao) => {
    botao.addEventListener('click', () => {
        const container = botao.parentElement;
        const menu = container.querySelector(".dropdownMenuPosts");
        console.log(container);
        console.log(menu);
        menu.classList.toggle("ativo");
    })
})



