const inputSenha = document.getElementById('senha');
const btnMostrarSenha = document.getElementById('olhoSenha');
btnMostrarSenha.addEventListener("click", mostrarSenha);

function mostrarSenha(){
    if(inputSenha.type === 'password'){
        inputSenha.setAttribute('type', 'text');
        btnMostrarSenha.setAttribute('name', 'eye-outline');
    }else{
        inputSenha.setAttribute('type', 'password');
        btnMostrarSenha.setAttribute('name', 'eye-off-outline');
    }
}


