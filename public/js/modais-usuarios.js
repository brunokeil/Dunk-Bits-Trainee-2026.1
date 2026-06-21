console.log("JS CARREGADO COM SUCESSO");

const profPics = document.querySelectorAll(".userProfilePicture");

const inputSenha1 = document.getElementById("senha1");
const inputSenha2 = document.getElementById("senha2");
const btnMostrarSenha1 = document.getElementById("olhoSenha1");
const btnMostrarSenha2 = document.getElementById("olhoSenha2");

btnMostrarSenha1.addEventListener("click", mostrarSenhaCriar);
btnMostrarSenha2.addEventListener("click", mostrarSenhaEditar);

const inputConfirmarSenha = document.getElementById("confirmarsenha");
const btnMostrarConfirmarSenha = document.getElementById("olhoConfirmarSenha");

btnMostrarConfirmarSenha.addEventListener("click", mostrarConfirmarSenha);

function mostrarSenhaCriar() {
	if (inputSenha1.type === "password") {
		inputSenha1.type = "text";
		btnMostrarSenha1.setAttribute("name", "eye-outline");
	} else {
		inputSenha1.type = "password";
		btnMostrarSenha1.setAttribute("name", "eye-off-outline");
	}
}

function mostrarSenhaEditar() {
	if (inputSenha2.type === "password") {
		inputSenha2.type = "text";
		btnMostrarSenha2.setAttribute("name", "eye-outline");
	} else {
		inputSenha2.type = "password";
		btnMostrarSenha2.setAttribute("name", "eye-off-outline");
	}
}

function mostrarConfirmarSenha() {
	if (inputConfirmarSenha.type === "password") {
		inputConfirmarSenha.setAttribute("type", "text");
		btnMostrarConfirmarSenha.setAttribute("name", "eye-outline");
	} else {
		inputConfirmarSenha.setAttribute("type", "password");
		btnMostrarConfirmarSenha.setAttribute("name", "eye-off-outline");
	}
}

function alterarImagem() {
	profPics.forEach((profPic) => {
		const img = profPic.querySelector("img");
		const input = profPic.querySelector("input");
		const icon = profPic.querySelector(".icone-img");
		const text = profPic.querySelector(".txt-img");

		profPic.addEventListener("click", () => {
			input.click();
			console.log("Imagem clicada");
		});

		input.addEventListener("change", () => {
			const arquivo = input.files[0];

			if (arquivo) {
				const imageURL = URL.createObjectURL(arquivo);

				img.style.display = "flex";

				icon.style.display = "none";
				text.style.display = "none";
				img.src = imageURL;
			}
		});
	});
}

// func de abrir/fechar modal
function toggleModal(idModal) {
	const modal = document.getElementById(idModal);
	const modalContainer = document.querySelector(".modal-container");

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
		form = modal.querySelector("form");
		if (form) {
			form.reset();
		}
	}
}

function closeAll() {
	let modais = document.querySelectorAll(".modalUser");

	for (let i = 0; i < modais.length; i++) {
		if (modais[i].classList.contains != "close")
			modais[i].classList.add("close");
		modais[i].classList.remove("open");
	}

	const modalContainer = document.querySelector(".modal-container");
	if (modalContainer.contains != "close")
		modalContainer.classList.add("close");

	// console.log(modais);
}
closeAll();

const errorModal = document.getElementById("errorModal");

if (errorModal) {
	toggleModal("errorModal");
}

function setAllEventListeners() {
	// todos os eventos de botoes modais aqui

	// botoes
	const viewUser = document.querySelectorAll(".view-user");
	const createUser = document.getElementById("createUser");
	const editUser = document.querySelectorAll(".edit-user");
	const deleteUser = document.querySelectorAll(".delete-user");
	const discardUser = document.querySelectorAll(".discard-user");
	const errorUser = document.querySelectorAll(".error-user");

	viewUser.forEach((btn) => {
		btn.addEventListener("click", () => {
			console.log(btn.dataset.profpic);

			if (btn.dataset.profpic && btn.dataset.profpic.trim() !== "") {
				document.querySelector(".imgProfPicNoEdit").src =
					"/public/assets/user_profile_pics/" + btn.dataset.profpic;
			} else {
				document.querySelector(".imgProfPicNoEdit").src =
					"/public/assets/placeholder/blank-profile-pic.webp";
			}

			document.getElementById("view-username").value = btn.dataset.name;

			document.getElementById("view-email").value = btn.dataset.email;

			toggleModal("viewModal");
		});
	});

	editUser.forEach((btn) => {
		btn.addEventListener("click", () => {
			if (btn.dataset.profpic && btn.dataset.profpic.trim() !== "") {
				const img = document.querySelector(".imgProfPic");
				
				img.src = "/public/assets/user_profile_pics/" + btn.dataset.profpic;
				img.style.display = "block";
				
				const logo = document.querySelector(".icone-img");
				const txt = document.querySelector(".txt-img");
				logo.style.display = "none";
				txt.style.display = "none";
			} else {
				const img = document.querySelector(".imgProfPic");
				img.style.display = "none";
				const logo = document.querySelector(".icone-img");
				const txt = document.querySelector(".txt-img");
				logo.style.display = "block";
				txt.style.display = "block";

			}

			console.log(btn.dataset.profpic);

			document.getElementById("edit-id").value = btn.dataset.id;

			document.querySelector(".imgProfPic").src =
				"/public/assets/user_profile_pics/" + btn.dataset.profpic;

			document.getElementById("edit-username").value = btn.dataset.name;

			document.getElementById("edit-email").value = btn.dataset.email;

			toggleModal("editModal");
		});
	});

	deleteUser.forEach((btn) => {
		btn.addEventListener("click", () => {
			document.getElementById("delete-id").value = btn.dataset.id;

			toggleModal("deleteModal");
		});
	});

	discardUser.forEach((btn) => {
		btn.addEventListener("click", () => {
			toggleModal("discardModal");
		});
	});

	errorUser.forEach((btn) => {
		btn.addEventListener("click", () => {
			toggleModal("errorModal");
		});
	});

	createUser.addEventListener("click", () => {
		toggleModal("createModal");
	});

	// cada ".closeModalBtn" vai receber o "toggleModal"
	const closeBtn = document.querySelectorAll(".closeModalBtn");

	closeBtn.forEach((btn) => {
		btn.addEventListener("click", () => {
			const modal = btn.closest(".modalUser");
			toggleModal(modal.id);
		});
	});

	// fechar modais clicando fora
	const modalContainer = document.querySelector(".modal-container");

	modalContainer.addEventListener("click", (e) => {
		if (e.target === e.currentTarget) closeAll();
	});
}

setAllEventListeners();
alterarImagem();
