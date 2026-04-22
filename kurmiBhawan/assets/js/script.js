const track = document.querySelector('.carousel-track');
const slides = document.querySelectorAll('.slide');
const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');
const dotsContainer = document.querySelector('.dots');

let index = 0;
const totalSlides = slides.length;

/* Create dots */
slides.forEach((_, i) => {
    const dot = document.createElement('span');
    if (i === 0) dot.classList.add('active');
    dot.addEventListener('click', () => moveToSlide(i));
    dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll('.dots span');

/* Move function */
function moveToSlide(i) {
    index = i;
    track.style.transform = `translateX(-${index * 100}%)`;

    dots.forEach(dot => dot.classList.remove('active'));
    dots[index].classList.add('active');
}

/* Next */
nextBtn.addEventListener('click', () => {
    index = (index + 1) % totalSlides;
    moveToSlide(index);
});

/* Prev */
prevBtn.addEventListener('click', () => {
    index = (index - 1 + totalSlides) % totalSlides;
    moveToSlide(index);
});

/* Auto Slide */
setInterval(() => {
    index = (index + 1) % totalSlides;
    moveToSlide(index);
}, 4000);

// Message Section - Show More/Less
let current = 0;
const sliderTrack = document.getElementById('sliderTrack');
const bottomDots = document.querySelectorAll('.dot');
const cards = sliderTrack.children;
const total = cards.length;
let autoTimer;

function goTo(index) {
    current = index;
    const cardW = cards[0].offsetWidth + 20;
    sliderTrack.style.transform = `translateX(-${current * cardW}px)`;
    bottomDots.forEach((d, i) => d.classList.toggle('active', i === current));
}

function next() {
    goTo((current + 1) % (total - 1));
}

autoTimer = setInterval(next, 3500);
sliderTrack.addEventListener('mouseenter', () => clearInterval(autoTimer));
sliderTrack.addEventListener('mouseleave', () => { autoTimer = setInterval(next, 3500); });
