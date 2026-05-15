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

//close delete
const closeEdit = document.getElementById("closeEditView")

//close edit



viewUser.addEventListener("click", ()=> {
    abrirModal("viewModal");
})

closeView.addEventListener("click", ()=> {
    fecharModal("viewModal");
})

createUser.addEventListener("click", () => {
    abrirModal("createModal");
})

closeCreate.addEventListener("click", ()=> {
    fecharModal("createModal");
})

editUser.addEventListener("click", () => {
    abrirModal("editModal");

})

closeEdit.addEventListener("click", () => {
    fecharModal("editModal");
})









