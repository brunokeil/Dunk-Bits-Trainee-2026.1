const profPics = document.querySelectorAll(".userProfilePicture");

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
        form = modal.querySelector("form");
        if(form){
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
    console.log(modais);
}
closeAll();

const errorModal = document.getElementById("errorModal");

if (errorModal) {
    toggleModal("errorModal");
}



function setAllEventListeners() {
    // todos os eventos de botoes modais aqui
    // botoes
    const editUser = document.querySelector(".edit-user");
    // const errorUser = document.querySelectorAll(".error-user");
    // const dropdownEdit = document.querySelectorAll(".dropdown-edit");

    editUser.addEventListener("click", () => {

        console.log(editUser.dataset.profpic)
        document.getElementById("edit-id").value = editUser.dataset.id;

        document.querySelector(".imgProfPic").src = "/public/assets/user_profile_pics/" + editUser.dataset.profpic;

        document.getElementById("edit-username").value = editUser.dataset.name;

        document.getElementById("edit-email").value = editUser.dataset.email;

        toggleModal("editModal");
    });

    // cada ".closeModalBtn" vai receber o "toggleModal"
    const closeBtn = document.querySelectorAll(".cancelBtnPosts");

    closeBtn.forEach(btn => {
        btn.addEventListener("click", () => {
            const modal = btn.closest(".modalUser");
            toggleModal(modal.id);
        });
    });

    // dropdownEdit.forEach((link) => {
    //     link.addEventListener("click", (e) => {
    //         e.preventDefault();
    //         const row = link.closest(".row-tabela");
    //         const botaoPrincipal = row.querySelector(".edit-user"); 
    //         if (botaoPrincipal) botaoPrincipal.click();
    //         link.closest(".dropdownMenuPosts").classList.remove("ativo");
    //     });
    // });      
    console.log(document.getElementById('editModal'));
}

setAllEventListeners();
alterarImagem();
