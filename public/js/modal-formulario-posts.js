
const tela = document.querySelector('#tela');

function abrirModal(idModal){
    const modal = document.getElementById(idModal);
    modal.style.display = 'flex';
    tela.style.display = 'block'
}

function fecharModal(idModal){
    const modal = document.getElementById(idModal);
    modal.style.display = 'none';
    tela.style.display = 'none';
}

