function aparecerSenha(){
    var inputSenha = document.getElementById('senha')
    var btnMostrarSenha = document.getElementById('olhoSenha')

    if(inputSenha.type === 'password'){
        inputSenha.setAttribute('type', 'text');
        btnMostrarSenha.classList.replace('eye-outline','eye-off-outline')
    } else{
        inputSenha.setAttribute('type', 'password');
        btnMostrarSenha.classList.replace('eye-off-outline','eye-outline')
    }
}
