console.log("JS CARREGADO COM SUCESSO");

// função de alterar imagem
const img = document.querySelectorAll(".postPicture");

function alterarImagem() {
	img.forEach((imagem) => {
		const img = imagem.querySelector("img");
		const input = imagem.querySelector("input");

		img.addEventListener("click", () => {
			input.click();
		});

		input.addEventListener("change", () => {
			const arquivo = input.files[0];

			if (arquivo) {
				const imageURL = URL.createObjectURL(arquivo);

				img.src = imageURL;
			}
		});
	});
}

// func de abrir/fechar modal
function toggleModal(idModal) {
	const modal = document.getElementById(idModal);
	const modalContainer = document.querySelector(".modalContainer");

	// lógica: ao invés de trocar a classe principal, dá pra adicionar múltiplas classes,
	// então, no css, configurei classes de abrir e fechar
	// console.log(idModal);

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
}

function closeAll() {
	let modais = document.querySelectorAll(".modalPost");
	for (let i = 0; i < modais.length; i++) {
		if (modais[i].classList.contains != "close")
			modais[i].classList.add("close");
		modais[i].classList.remove("open");
	}
	const modalContainer = document.querySelector(".modalContainer");
	if (modalContainer.contains != "close")
		modalContainer.classList.add("close");
	// console.log(modais);
}
closeAll();

function setAllEventListeners() {
	// todos os eventos de botoes modais aqui

	// botoes
	const viewPost = document.querySelectorAll(".viewPost");
	const createPost = document.querySelectorAll(".createPost");
	const editPost = document.querySelectorAll(".editPost");
	const deletePost = document.querySelectorAll(".deletePost");

	viewPost.forEach((btn) => {
		btn.addEventListener("click", () => {
			const mudancaID = btn
				.getAttribute("data-bs-target")
				.replace("#", "");

			toggleModal(mudancaID);
		});
	});

	createPost.forEach((btn) => {
		btn.addEventListener("click", () => {
			toggleModal("modalCreate");
		});
	});

	editPost.forEach((btn) => {
		btn.addEventListener("click", () => {
			const mudancaID = btn
				.getAttribute("data-bs-target")
				.replace("#", "");

			toggleModal(mudancaID);
		});
	});

	deletePost.forEach((btn) => {
		btn.addEventListener("click", () => {
			const mudancaID = btn
				.getAttribute("data-bs-target")
				.replace("#", "");

			toggleModal(mudancaID);
		});
	});

	// cada ".closeModalBtn" vai receber o "toggleModal"
	const closeBtn = document.querySelectorAll(".closeModalBtn");

	for (let i = 0; i < closeBtn.length; i++) {
		closeBtn[i].addEventListener("click", () => {
			toggleModal(closeBtn[i].parentNode.parentNode.getAttribute("id"));
			// pra "closeBtn[i].parentNode.parentNode.id" se referir ao "modal pai", o botao tem q ta 2 elementos a fundo dele... hehe
		});
		// console.log(closeBtn[i].parentNode.parentNode);
	}

	// fechar modal quando clicar fora
	const modalContainer = document.querySelector(".modalContainer");
	modalContainer.addEventListener("click", (e) => {
		if (e.target === e.currentTarget) closeAll();
	});
}

setAllEventListeners();
alterarImagem();
