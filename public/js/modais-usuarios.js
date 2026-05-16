console.log("JS CARREGADO COM SUCESSO");

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
  }

  console.log(idModal);
}

function closeAll() {
  let modais = document.querySelectorAll(".modalUser");
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
  const viewUser = document.getElementById("viewUser");
  const createUser = document.getElementById("newUser");
  const editUser = document.getElementById("editUser");
  const deleteUser = document.getElementById("deleteUser");

  viewUser.addEventListener("click", () => {
    toggleModal("viewModal");
  });

  createUser.addEventListener("click", () => {
    toggleModal("createModal");
  });

  editUser.addEventListener("click", () => {
    toggleModal("editModal");
  });

  deleteUser.addEventListener("click", () => {
    toggleModal("deleteModal");
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
