
console.log("Carrossel script loaded");

const slider = document.querySelector(".slider");
const sliderContent = document.querySelector(".slider-content");
const radioAuto = document.querySelector(".radio-auto");
const leftArrow = document.querySelector(".left-arrow");
const rightArrow = document.querySelector(".right-arrow");

const ITEMS_PER_PAGE = 2;

let currentIndex = 0;
let totalPages = 1;
let autoSlideInterval;

function updateSlider() {
    if (!slider || !sliderContent || !radioAuto || sliderContent.children.length === 0) {
        return;
    }

    totalPages = Math.ceil(sliderContent.children.length / ITEMS_PER_PAGE);
    currentIndex = Math.min(currentIndex, totalPages - 1);

    createRadioButtons();
    updateRadioButtons();
    scrollToPage(false);
}

function createRadioButtons() {
    radioAuto.innerHTML = "";

    for (let i = 0; i < totalPages; i++) {
        const radio = document.createElement("button");
        radio.type = "button";
        radio.classList.add("radio-label");
        // radio.setAttribute("aria-label", `Go to slide ${i + 1}`);

        if (i === currentIndex) {
            radio.classList.add("active");
        }

        radio.addEventListener("click", () => {
            currentIndex = i;
            scrollToPage();
        });

        radioAuto.appendChild(radio);
    }
}

function updateRadioButtons() {
    const radios = radioAuto.querySelectorAll(".radio-label");
    radios.forEach((radio, index) => {
        radio.classList.toggle("active", index === currentIndex);
    });
}

function scrollToPage(smooth = true) {
    const startItem = sliderContent.children[currentIndex * ITEMS_PER_PAGE];

    if (!startItem) {
        return;
    }

    sliderContent.scrollTo({
        left: startItem.offsetLeft,
        behavior: smooth ? "smooth" : "auto",
    });

    updateRadioButtons();
}

function goToNextSlide() {
    currentIndex = (currentIndex + 1) % totalPages;
    scrollToPage();
}

function goToPreviousSlide() {
    currentIndex = currentIndex - 1;
    if (currentIndex < 0) {
        currentIndex = totalPages - 1;
    }

    scrollToPage();
}

function startAutoSlide() {
    stopAutoSlide();
    autoSlideInterval = setInterval(goToNextSlide, 3000);
}

function stopAutoSlide() {
    clearInterval(autoSlideInterval);
}

leftArrow?.addEventListener("click", () => {
    goToPreviousSlide();
    startAutoSlide();
});

rightArrow?.addEventListener("click", () => {
    goToNextSlide();
    startAutoSlide();
});

slider?.addEventListener("pointerdown", () => {
    startAutoSlide();
});

slider?.addEventListener("wheel", () => {
    startAutoSlide();
}, { passive: true });

window.addEventListener("resize", updateSlider);

updateSlider();
startAutoSlide();