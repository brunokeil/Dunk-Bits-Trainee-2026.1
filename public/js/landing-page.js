cards.forEach((card, index) => {
    card.classList.remove("mostrar");

    if (index >= inicio && index < fim) {
        card.style.display = "flex";

        setTimeout(() => {
            card.classList.add("mostrar");
        }, 10);
    } else {
        card.style.display = "none";
    }
});
