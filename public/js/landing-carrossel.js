console.log("Carrossel script loaded");

const slider = document.querySelector(".slider");
const sliderContent = document.querySelector(".slider-content");
const radioAuto = document.querySelectorAll(".radio-auto");
const leftArrow = document.querySelector(".left-arrow");
const rightArrow = document.querySelector(".right-arrow");

let currentIndex = 0;
let itemsPerPage = 3;
let totalPages = 1;
let autoSlideInterval;

function updateSlider() {
    const sliderWidth = slider.offsetWidth;
    const itemWidth = sliderContent.children[0].getBoundingClientRect().width;

    itemsPerPage = Math.floor(sliderWidth / itemWidth);
    totalPages = Math.ceil((sliderContent.children.length / itemsPerPage) - 2*((sliderWidth/itemWidth) /100));

    sliderContent.style.transform = `translateX(-${currentIndex * sliderWidth}px)`;
    createRadioButtons();
    updateRadioButtons();
}

function createRadioButtons() {
    radioAuto.innerHTML = " ";

    for (let i = 0; i < totalPages; i++) {
        const radio = document.createElement("div");
        radio.classList.add("radio-label");

        if (i == 0) {
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

function scrollToPage() {
    const sliderWidth = slider.offsetWidth * currentIndex;
    sliderContent.scrollTo({ left: sliderWidth, behavior: "smooth" });
    updateRadioButtons();
    resetAutoSlide();
}

function goToNextSlide() {
    currentIndex = (currentIndex + 1) % totalPages;
    scrollToPage();
    resetAutoSlide();
}

function goToPreviousSlide() {
    currentIndex = (currentIndex - 1 + totalPages) % totalPages;
    scrollToPage();
    resetAutoSlide();
}

// 

function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
        goToNextSlide();
    }, 3000);
}

function stopAutoSlide() {
    clearInterval(autoSlideInterval);
}

function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
}

// 

leftArrow.addEventListener("click", () => {
    goToPreviousSlide();
});

rightArrow.addEventListener("click", () => {
    goToNextSlide();
});

window.addEventListener("resize", updateSlider);



// slider.addEventListener("mouseenter", stopAutoSlide);
// slider.addEventListener("mouseleave", startAutoSlide);

updateSlider();
startAutoSlide();
