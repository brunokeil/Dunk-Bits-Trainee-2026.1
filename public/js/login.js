function mostrarSenha(){
    var inputSenha = document.getElementById('senha')
    var btnMostrarSenha = document.getElementById('olhoSenha')

    if(inputSenha.type === 'password'){
        inputSenha.setAttribute('type', 'text');
        btnMostrarSenha.setAttribute('name', 'eye-outline');
    }else{
        inputSenha.setAttribute('type', 'password');
        btnMostrarSenha.setAttribute('name', 'eye-off-outline');
    }
}


