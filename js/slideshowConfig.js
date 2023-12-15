
// const sliders = document.querySelectorAll('.glide');
const sliderConfig = {
    type: 'carousel',
    startAt: 0,
    autoplay: 2000,
    hoverpause: true,
    perView: 3,
    gap: 10
};

let glide = new Glide('.glide', sliderConfig);
let activeLI

glide.on('move.after', function() {
    activeLI = document.querySelector('.glide__slide--active');
    let activeImg = activeLI.querySelector(':scope > img');
    let someHash = Math.floor(Math.random() * 90000) + 10000;
    activeImg.src = `https://www.milesit.com/wp-content/uploads/Consult-Infographic-recolored.svg?${someHash}`;
    console.log(activeImg.src);
    // fetch(activeSlide.src);
});

glide.mount();



