const inputSenha = document.getElementById('senha');
const btnMostrarSenha = document.getElementById('olhoSenha');
btnMostrarSenha.addEventListener("click", mostrarSenha);

const inputConfirmarSenha = document.getElementById('confirmarsenha');
const btnMostrarConfirmarSenha = document.getElementById('olhoConfirmarSenha');
btnMostrarConfirmarSenha.addEventListener("click", mostrarConfirmarSenha);

document.getElementById('confirmarsenha').addEventListener('input', function(){ checar(); });

document.getElementById('senha').addEventListener('input', function(){ checarSenhaForte(); });


function checarSenhaForte(){
    const senhaforte = document.getElementById('senhaforte');
    

    if(senha){
        senhaforte.style.display = "block";
    } else{
        senhaforte.style.display = "none";
    }
}


function mostrarSenha(){

    if(inputSenha.type === 'password'){
        inputSenha.setAttribute('type', 'text');
        btnMostrarSenha.setAttribute('name', 'eye-outline');
    }else{
        inputSenha.setAttribute('type', 'password');
        btnMostrarSenha.setAttribute('name', 'eye-off-outline');
    }
}

function mostrarConfirmarSenha(){

    if(inputConfirmarSenha.type === 'password'){
        inputConfirmarSenha.setAttribute('type', 'text');
        btnMostrarConfirmarSenha.setAttribute('name', 'eye-outline');
    }else{
        inputConfirmarSenha.setAttribute('type', 'password');
        btnMostrarConfirmarSenha.setAttribute('name', 'eye-off-outline');
    }
}

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