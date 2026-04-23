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

// Events Crausel
const tsTrack = document.querySelector('.ts-track');
const tsSlides = document.querySelectorAll('.ts-slide');
const tsNext = document.querySelector('.ts-next');
const tsPrev = document.querySelector('.ts-prev');

let tsIndex = 0;
const totalTS = tsSlides.length;

function updateTS() {
    tsTrack.style.transform = `translateX(-${tsIndex * 100}%)`;

    tsSlides.forEach(s => s.classList.remove('active'));
    tsSlides[tsIndex].classList.add('active');
}

tsNext.addEventListener('click', () => {
    tsIndex = (tsIndex + 1) % totalTS;
    updateTS();
});

tsPrev.addEventListener('click', () => {
    tsIndex = (tsIndex - 1 + totalTS) % totalTS;
    updateTS();
});

/* Auto slide */
setInterval(() => {
    tsIndex = (tsIndex + 1) % totalTS;
    updateTS();
}, 4000);


// gallary

const gallaryCards = document.querySelectorAll('.gallery-card');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        }
    });
});

gallaryCards.forEach(card => observer.observe(card));

// charity crausel

const ctrack = document.getElementById("charityTrack");

// clone content for seamless loop
track.innerHTML += ctrack.innerHTML;