
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


glide.on('move.after', function() {
    let someHash = Math.floor(Math.random() * 90000) + 10000;
    let activeSlide = document.querySelectorAll('.glide__slide--active a img');
    activeSlide.src = `https://www.milesit.com/wp-content/uploads/Consult-Infographic-recolored.svg?${someHash}`;
    console.log(activeSlide.src);
    // fetch(activeSlide.src);
});

glide.mount();



