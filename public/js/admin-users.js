//const imgs = document.querySelectorAll(".ponto");
const botaoEsq = document.querySelector(".seta-esquerda");
const botaoDir = document.querySelector(".seta-direita");
const pag = document.querySelector(".visao-pag");
const btnOpts = document.querySelectorAll(".trespontos")

let linhas = document.querySelectorAll(".row-tabela")


const dropdown = document.getElementById("dropdownGlobal");
let linhaAtual = null;

btnOpts.forEach((botao) => {
    botao.addEventListener("click", () => {
        linhaAtual = botao.closest(".row-tabela");

        const rect = botao.getBoundingClientRect();

        dropdown.style.left = `${rect.left}px`;
        dropdown.style.top = `${rect.bottom + 5}px`;

        console.log("Clique detectado");
        dropdown.classList.toggle("ativo");
    });
});

document.querySelector(".dropdown-view").addEventListener("click", () => {
    linhaAtual.querySelector(".view-user").click();
    dropdown.classList.remove("ativo");
});

document.querySelector(".dropdown-edit").addEventListener("click", () => {
    linhaAtual.querySelector(".edit-user").click();
    dropdown.classList.remove("ativo");
});

document.querySelector(".dropdown-delete").addEventListener("click", () => {
    linhaAtual.querySelector(".delete-user").click();
    dropdown.classList.remove("ativo");
});

document.addEventListener("click", (event) => {
    if (dropdown.classList.contains("ativo")) {
        
        const clicouNoDropdown = dropdown.contains(event.target);
        const clicouNoBotao = event.target.closest(".trespontos");

        if (!clicouNoDropdown && !clicouNoBotao) {
            dropdown.classList.remove("ativo");
        }
    }
});
