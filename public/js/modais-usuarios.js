function abrirModal(idModal){
    document.getElementById(idModal).style.display = "flex";
    console.log(idModal);
}

function fecharModal(idModal) {
    document.getElementById(idModal).style.display = "none";
}

const createUser = document.getElementById("createUser");
const deleteUser = document.getElementById("deleteUser");
const viewUser = document.getElementById("viewUser");
const editUser = document.getElementById("editUser");
const cancel = document.getElementById("btnCancel");

createUser.addEventListener("click", ()=> {
    abrirModal("criar");
})

cancel.addEventListener("click", ()=> {
    fecharModal("criar");
})



