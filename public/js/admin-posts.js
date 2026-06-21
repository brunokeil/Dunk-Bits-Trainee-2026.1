// var linhasDaTabela = document.querySelectorAll("tbody tr");
// var totalDePaginas = Math.ceil(linhasDaTabela.length / 5);
// var paginaAtual = 1;

// function atualizarPagina() {
// 	var inicio = (paginaAtual - 1) * 5;
// 	var fim = paginaAtual * 5;

// 	for (var i = 0; i < linhasDaTabela.length; i = i + 1) {
// 		if (i >= inicio && i < fim) {
// 			linhasDaTabela[i].style.display = "";
// 		} else {
// 			linhasDaTabela[i].style.display = "none";
// 		}
// 	}

// 	document.getElementById("numeroPaginaAtual").innerText = paginaAtual;

// 	if (paginaAtual == 1) {
// 		document.getElementById("btnVoltarPagina").disabled = true;
// 	} else {
// 		document.getElementById("btnVoltarPagina").disabled = false;
// 	}

// 	if (paginaAtual == totalDePaginas || totalDePaginas == 0) {
// 		document.getElementById("btnAvancarPagina").disabled = true;
// 	} else {
// 		document.getElementById("btnAvancarPagina").disabled = false;
// 	}
// }

// function voltar() {
// 	if (paginaAtual > 1) {
// 		paginaAtual = paginaAtual - 1;
// 		atualizarPagina();
// 	}
// }

// function avancar() {
// 	if (paginaAtual < totalDePaginas) {
// 		paginaAtual = paginaAtual + 1;
// 		atualizarPagina();
// 	}
// }


const tresPontos = document.querySelectorAll(".trespontos");

let linhaAtual = null;
const dropdown = document.querySelector(".dropdownMenuPosts");

tresPontos.forEach((botao) => {
	botao.addEventListener("click", () => {
		
		
		linhaAtual = botao.closest(".row-tabela");

        const rect = botao.getBoundingClientRect();

        dropdown.style.left = `${rect.left}px`;
        dropdown.style.top = `${rect.bottom + 5}px`;

        // console.log("Clique detectado");
        dropdown.classList.toggle("aparecer");
	});
});

document.addEventListener("click", (event) => {
    if (dropdown.classList.contains("aparecer")) {
        
        const clicouNoDropdown = dropdown.contains(event.target);
        const clicouNoBotao = event.target.closest(".trespontos");

        if (!clicouNoDropdown && !clicouNoBotao) {
            dropdown.classList.remove("aparecer");
        }
    }
});

// console.log(tresPontos);

// document.getElementById("btnVoltarPagina").onclick = voltar;
// document.getElementById("btnAvancarPagina").onclick = avancar;

// atualizarPagina();