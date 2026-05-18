const linhas = document.querySelectorAll('tbody tr');
const totalPaginas = Math.ceil(linhas.length / 5);
let pagina = 1;

function atualizarTabela() {
    linhas.forEach((linha, i) => {
        linha.style.display = (i >= (pagina - 1) * 5 && i < pagina * 5) ? '' : 'none';
    });

    document.getElementById('infoPagina').innerText = `Página ${pagina} de ${totalPaginas}`;
    document.getElementById('btnAnterior').disabled = pagina === 1;
    document.getElementById('btnProximo').disabled = pagina === totalPaginas;
}

document.getElementById('btnAnterior').addEventListener('click', () => {
    if (pagina > 1) { pagina--; atualizarTabela(); }
});

document.getElementById('btnProximo').addEventListener('click', () => {
    if (pagina < totalPaginas) { pagina++; atualizarTabela(); }
});

atualizarTabela();

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