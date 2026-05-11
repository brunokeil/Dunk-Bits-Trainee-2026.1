function fecharModal(idModal){
    const modal = document.getElementById(idModal);
    modal.style.display = 'none';
}

function abrirModal(idModal){
    const modal = document.getElementById(idModal);
    modal.style.display = 'flex';
}

const tresPontos = document.querySelectorAll('.trespontos');
tresPontos.forEach((botao) => {
    botao.addEventListener('click', () => {
        const caixaMae = botao.parentElement;
        const menu = caixaMae.querySelector('.dropdownMenuPosts');
        menu.classList.toggle('aparecer');
    });
});