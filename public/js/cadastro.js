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

document.getElementById('confirmarsenha').addEventListener('input', function(){ checar(); });

function checar(){
    const senha = document.getElementById('senha').value;
    const confirmarsenha = document.getElementById('confirmarsenha').value;
    const criar = document.querySelector('.buttonEntrar');
    const caixaborda1 = document.getElementById('confirmarsenha');
    const caixaborda2 = document.getElementById('senha');


    if(!senha || !confirmarsenha){
        caixaborda1.style.border = "2px solid white";
        caixaborda2.style.border = "2px solid white";
        criar.disabled = true;
    }else if(senha !== confirmarsenha){
        caixaborda1.style.border = "3px solid red";
        caixaborda2.style.border = "3px solid red";
        criar.disabled = true;
    } else{
        caixaborda1.style.border = "2px solid green";
        caixaborda2.style.border = "2px solid green";
        criar.disabled = false;
    }
}