function mostrarSenha(){
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


function mostrarConfirmarSenha(){
    var inputConfirmarSenha = document.getElementById('confirmarsenha')
    var btnMostrarConfirmarSenha = document.getElementById('olhoConfirmarSenha')

    if(inputConfirmarSenha.type === 'password'){
        inputConfirmarSenha.setAttribute('type', 'text');
        btnMostrarConfirmarSenha.setAttribute('name', 'eye-outline');
    }else{
        inputConfirmarSenha.setAttribute('type', 'password');
        btnMostrarConfirmarSenha.setAttribute('name', 'eye-off-outline');
    }
}

function checar(){
    if(document.getElementById('senha').value == document.getElementById('confirmarsenha').value){
        document.getElementById('senha').style.borderColor = #008000;
        document.getElementById('confirmarsenha').style.borderColor = #008000;
    } else{
        document.getElementById('senha').style.borderColor = #800000;
        document.getElementById('confirmarsenha').style.borderColor = #800000;      
    }

}