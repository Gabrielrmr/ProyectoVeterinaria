const slider = document.querySelector('.slider');
const indicators = document.querySelectorAll('.slider-indicator span');
let currentIndex = 0;
let timeout;

function goToSlide(index) {
    if (index < 0) {
        index = slider.children.length - 1;
    } else if (index >= slider.children.length) {
        index = 0;
    }
    slider.style.transform = `translateX(-${index * 100}%)`;
    currentIndex = index;
    updateIndicators();
}

function updateIndicators() {
    indicators.forEach((indicator, index) => {
        if (index === currentIndex) {
            indicator.style.backgroundColor = '#f00';
        } else {
            indicator.style.backgroundColor = '#333';
        }
    });
}

function startAutoSlide() {
    clearTimeout(timeout);
    timeout = setTimeout(() => {
        goToSlide(currentIndex + 1);
        startAutoSlide();
    }, 3000);
}

startAutoSlide();

indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        clearTimeout(timeout);
        goToSlide(index);
        setTimeout(startAutoSlide, 10000); // Esperar 10 segundos antes de reiniciar la animación
    });
});
