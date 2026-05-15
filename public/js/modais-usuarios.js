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

//close view
const closeView = document.getElementById("closeUserView")

//close create

//close delete

//close edit


createUser.addEventListener("click", ()=> {
    abrirModal("create");
})

closeView.addEventListener("click", ()=> {
    fecharModal("create");
})





