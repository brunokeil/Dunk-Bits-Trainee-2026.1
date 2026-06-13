    const inputSenha = document.getElementById('senha');
    const btnMostrarSenha = document.getElementById('olhoSenha');
    btnMostrarSenha.addEventListener("click", mostrarSenha);

    const inputConfirmarSenha = document.getElementById('confirmarsenha');
    const btnMostrarConfirmarSenha = document.getElementById('olhoConfirmarSenha');
    btnMostrarConfirmarSenha.addEventListener("click", mostrarConfirmarSenha);
        

    document.getElementById('confirmarsenha').addEventListener('input', function(){ checar(); });

    document.getElementById('senha').addEventListener('input', function(){ checar(); });

    document.getElementById('senha').addEventListener('input', function(){ checarSenhaForte(); });


    function checarSenhaForte(){
        const senhaforte = document.getElementById('senhaforte'); 
        const senha = document.getElementById('senha').value;
        const senhaQuantidade = document.getElementById('senhaQuantidade');
        const senhaMaiuscula = document.getElementById('senhaMaiuscula');
        const senhaMinuscula = document.getElementById('senhaMinuscula');
        const senhaCaracterEspecial = document.getElementById('senhaCaracterEspecial');
        const senhaNumero = document.getElementById('senhaNumero');
        const criar = document.querySelector('.buttonEntrar');

        let senhaNumeroFeito = false;
        let senhaMaiusculaFeito = false;
        let senhaMinusculaFeito = false;
        let senhaCaracterEspecialFeito = false;

        if(!senha){
            senhaforte.classList.remove('ativo');
        } else{
            senhaforte.classList.add('ativo');
        }


        if(/[A-Z]/.test(senha)){
            senhaMaiuscula.classList.add('feito');
            senhaMaiusculaFeito = true;
        } else{
            senhaMaiuscula.classList.remove('feito');
            senhaMaisculaFeito = false;
        }
        if(/[a-z]/.test(senha)){
            senhaMinuscula.classList.add('feito');
            senhaMinusculaFeito = true;
        } else{
            senhaMinuscula.classList.remove('feito');
            senhaMinusculaFeito = false;
        }
        if(/[0-9]/.test(senha)){
            senhaNumero.classList.add('feito');
            senhaNumeroFeito = true;
        } else{
            senhaNumero.classList.remove('feito');
            senhaNumeroFeito = false;
        }
        if(/[\W_]/.test(senha)){
            senhaCaracterEspecial.classList.add('feito');
            senhaCaracterEspecialFeito = true;
        } else{
            senhaCaracterEspecial.classList.remove('feito');
            senhaCaracterEspecialFeito = false;
        }

        if(senhaMaiusculaFeito && senhaMinusculaFeito && senhaNumeroFeito && senhaCaracterEspecialFeito){
            return true;
        } else{
            return false;
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
        } else if(senha === confirmarsenha && checarSenhaForte() === true){
            caixaborda1.style.border = "2px solid green";
            caixaborda2.style.border = "2px solid green";
            criar.disabled = false;
        }
    }