console.log("JS CARREGADO COM SUCESSO");

function abrirModal(idModal){
    document.getElementById(idModal).style.display = "flex";
    console.log(idModal);
}

function fecharModal(idModal) {
    document.getElementById(idModal).style.display = "none";
}

const createUser = document.getElementById("newUser");
const deleteUser = document.getElementById("deleteUser");
const viewUser = document.getElementById("viewUser");
const editUser = document.getElementById("editUser");

//close view
const closeView = document.getElementById("closeUserView")

//close create
const closeCreate = document.getElementById("closeCreateView")

//close edit
const closeEdit = document.getElementById("closeEditView")

//close delete

let aberto = null



viewUser.addEventListener("click", ()=> {
    abrirModal("viewModal");
    if(aberto != null)
        fecharModal(aberto)
    aberto = "viewModal"
    
})

closeView.addEventListener("click", ()=> {
    fecharModal("viewModal");
    aberto = null
})

createUser.addEventListener("click", () => {
    abrirModal("createModal");
    if(aberto != null)
        fecharModal(aberto)
    aberto = "createModal"
})

closeCreate.addEventListener("click", ()=> {
    fecharModal("createModal");
    aberto = null
})

editUser.addEventListener("click", () => {
    abrirModal("editModal");
    if(aberto != null)
        fecharModal(aberto)
    aberto = "editModal"

})

closeEdit.addEventListener("click", () => {
    fecharModal("editModal");
    aberto = null
})









