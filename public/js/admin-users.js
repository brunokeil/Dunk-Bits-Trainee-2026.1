//const imgs = document.querySelectorAll(".ponto");
const botaoEsq = document.querySelector(".seta-esquerda");
const botaoDir = document.querySelector(".seta-direita");
const pag = document.querySelector(".visao-pag");
const btnOpts = document.querySelectorAll(".trespontos")

let linhas = document.querySelectorAll(".row-tabela")

const usuarios = [
  { id: 1, username: "joaosilva", email: "joao@gmail.com" },
  { id: 2, username: "mariasantos", email: "maria@gmail.com" },
  { id: 3, username: "carlosdev", email: "carlos@gmail.com" },
  { id: 4, username: "anaoliveira", email: "ana@gmail.com" },
  { id: 5, username: "pedrotech", email: "pedro@gmail.com" },

  { id: 6, username: "lucascode", email: "lucas@gmail.com" },
  { id: 7, username: "fernandaux", email: "fer@gmail.com" },
  { id: 8, username: "brunoapi", email: "bruno@gmail.com" },
  { id: 9, username: "julianadev", email: "juliana@gmail.com" },
  { id: 10, username: "rafaelux", email: "rafael@gmail.com" },

  { id: 11, username: "gabrieljs", email: "gabriel@gmail.com" },
  { id: 12, username: "thaisui", email: "thais@gmail.com" },
  { id: 13, username: "leonardocode", email: "leo@gmail.com" },
  { id: 14, username: "isabelux", email: "isabela@gmail.com" },
  { id: 15, username: "matheusdev", email: "matheus@gmail.com" },
];


let linhas = document.querySelectorAll(".linha-tabela")

const usuarios = [
  { id: 1, username: "joaosilva", email: "joao@gmail.com" },
  { id: 2, username: "mariasantos", email: "maria@gmail.com" },
  { id: 3, username: "carlosdev", email: "carlos@gmail.com" },
  { id: 4, username: "anaoliveira", email: "ana@gmail.com" },
  { id: 5, username: "pedrotech", email: "pedro@gmail.com" },

  { id: 6, username: "lucascode", email: "lucas@gmail.com" },
  { id: 7, username: "fernandaux", email: "fer@gmail.com" },
  { id: 8, username: "brunoapi", email: "bruno@gmail.com" },
  { id: 9, username: "julianadev", email: "juliana@gmail.com" },
  { id: 10, username: "rafaelux", email: "rafael@gmail.com" },

  { id: 11, username: "gabrieljs", email: "gabriel@gmail.com" },
  { id: 12, username: "thaisui", email: "thais@gmail.com" },
  { id: 13, username: "leonardocode", email: "leo@gmail.com" },
  { id: 14, username: "isabelux", email: "isabela@gmail.com" },
  { id: 15, username: "matheusdev", email: "matheus@gmail.com" },
];


let atual = 0
let anterior = atual

function atualizarUsuarios(pag){
    linhas.forEach((item, index) => {
        let infos = item.querySelectorAll("td");
        let u = usuarios[(pag) * 5 + index];
        infos[0].textContent = u.id;
        infos[1].textContent = u.username;
        infos[2].textContent = u.email;
    })
}

function mudarPaginacaoDir(){
    atual = (atual + 1) % 3;
    pag.textContent = atual + 1

    /*
    imgs[atual].src = "/public/assets/ponto-ativo.png";
    imgs[anterior].src = "/public/assets/ponto-inativo.png";
    anterior = atual;
    */

}

function mudarPaginacaoEsq(){
    if (atual == 0){
        atual = 3;
    } else {
        atual = atual - 1;
    }

    //imgs[atual].src = "/public/assets/ponto-ativo.png";
    //imgs[anterior].src = "/public/assets/ponto-inativo.png";

    pag.textContent = atual + 1

    //anterior = atual;
}

botaoEsq.addEventListener("click",()=> {
    console.log("BotaoEsq clicado");
    mudarPaginacaoEsq()
    atualizarUsuarios(atual)
})

botaoDir.addEventListener("click",()=> {
    console.log("BotaoDir clicado");
    mudarPaginacaoDir()
    atualizarUsuarios(atual)
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




function abrirModal(idModal) {
    

}