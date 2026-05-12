const btnAbrir = document.getElementById('buttonMenuMobile');
const btnFechar = document.getElementById('buttonFecharMenu');
const menuOverlay = document.getElementById('telaMenuMobile');

btnAbrir.addEventListener('click', () => {
    menuOverlay.classList.add('aberto');
});

btnFechar.addEventListener('click', () => {
    menuOverlay.classList.remove('aberto');
});