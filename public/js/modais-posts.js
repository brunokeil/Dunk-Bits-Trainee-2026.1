var linhasDaTabela = document.querySelectorAll("tbody tr");
var totalDePaginas = Math.ceil(linhasDaTabela.length / 5);
var paginaAtual = 1;

function atualizarPagina() {
    var inicio = (paginaAtual - 1) * 5;
    var fim = paginaAtual * 5;

    for (var i = 0; i < linhasDaTabela.length; i = i + 1) {
        if (i >= inicio && i < fim) {
            linhasDaTabela[i].style.display = "";
        } else {
            linhasDaTabela[i].style.display = "none";
        }
    }

    document.getElementById("numeroPaginaAtual").innerText = paginaAtual;

    if (paginaAtual == 1) {
        document.getElementById("btnVoltarPagina").disabled = true;
    } else {
        document.getElementById("btnVoltarPagina").disabled = false;
    }

    if (paginaAtual == totalDePaginas || totalDePaginas == 0) {
        document.getElementById("btnAvancarPagina").disabled = true;
    } else {
        document.getElementById("btnAvancarPagina").disabled = false;
    }
}

function voltar() {
    if (paginaAtual > 1) {
        paginaAtual = paginaAtual - 1;
        atualizarPagina();
    }
}

function avancar() {
    if (paginaAtual < totalDePaginas) {
        paginaAtual = paginaAtual + 1;
        atualizarPagina();
    }
}

document.getElementById("btnVoltarPagina").onclick = voltar;
document.getElementById("btnAvancarPagina").onclick = avancar;

atualizarPagina();


const tresPontos = document.querySelectorAll('.trespontos');
tresPontos.forEach((botao) => {
    botao.addEventListener('click', () => {
        const caixaMae = botao.parentElement;
        const menu = caixaMae.querySelector('.dropdownMenuPosts');
        menu.classList.toggle('aparecer');
    });
});


console.log("JS CARREGADO COM SUCESSO");

// função de alterar imagem
const img = document.querySelectorAll(".imgPost");

function alterarImagem(){
    img.forEach((imagem) => {
        const img = imagem.querySelector("img");
        const input = imagem.querySelector("input");

        img.addEventListener("click", () => {
            input.click();
        })

        input.addEventListener("change", () => {
            const arquivo = input.files[0];

            if (arquivo) {
                const imageURL = URL.createObjectURL(arquivo);

                img.src = imageURL;
            }
        });
    })
}

// func de abrir/fechar modal
function toggleModal(idModal) {
    const modal = document.getElementById(idModal);
    const modalContainer = document.querySelector(".modalContainer");

    // lógica: ao invés de trocar a classe principal, dá pra adicionar múltiplas classes,
    // então, no css, configurei classes de abrir e fechar

    //verifica se quer abrir ou fechar
    if (modal.classList.contains("close")) {
        modal.classList.remove("close");
        modal.classList.add("open");
        modalContainer.classList.remove("close");
        modalContainer.classList.add("open");
    } else {
        modal.classList.remove("open");
        modal.classList.add("close");
        modalContainer.classList.remove("open");
        modalContainer.classList.add("close");
    }

    console.log(idModal);
}

function closeAll() {
    let modais = document.querySelectorAll(".modalPost");
    for (let i = 0; i < modais.length; i++) {
        if (modais[i].classList.contains != "close")
            modais[i].classList.add("close");
        modais[i].classList.remove("open");
    }
    console.log(modais);
}
closeAll();

function setAllEventListeners() {
    // todos os eventos de botoes modais aqui

    // botoes
    const viewPost = document.querySelectorAll(".btnVisuPostADM");
    const createPost = document.querySelectorAll(".btnCriarPostADM");
    const editPost = document.querySelectorAll(".btnEditPostADM");
    const deletePost = document.querySelectorAll(".btnDeletePostADM");

    viewPost.forEach((btn) => {
        btn.addEventListener("click", () => {
            toggleModal("modalVisualizar");
        });
    });

    createPost.forEach((btn) => {
        btn.addEventListener("click", () => {
            toggleModal("modalCriar");
        });
    });

    editPost.forEach((btn) => {
        btn.addEventListener("click", () => {
            toggleModal("modalEditar");
        });
    });

    deletePost.forEach((btn) => {
        btn.addEventListener("click", () => {
            toggleModal("modalExcluir");
        });
    });


    // cada ".closeModalBtn" vai receber o "toggleModal"
    const closeBtn = document.querySelectorAll(".closeModalBtn");

    for (let i = 0; i < closeBtn.length; i++) {
        closeBtn[i].addEventListener("click", () => {
            toggleModal(closeBtn[i].parentNode.parentNode.id);
            // pra "closeBtn[i].parentNode.parentNode.id" se referir ao "modal pai", o botao tem q ta 2 elementos a fundo dele... hehe
        });
        console.log(closeBtn[i].parentNode.parentNode.id);
    }
}

setAllEventListeners();
alterarImagem();
