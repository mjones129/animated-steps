
const sliders = document.querySelectorAll('.glide');
const sliderConfig = {
    type: 'carousel',
    startAt: 0,
    autoplay: 2000,
    hoverpause: true,
    perView: 3,
    gap: 10
};

// let glide = new Glide('.glide', sliderConfig);

//reload image URL on slide move (only useful for animated SVGs that need to restart with every new slide)

// glide.on('move.after', function() {
//     activeLI = document.querySelector('.glide__slide--active');
//     let activeImg = activeLI.querySelector(':scope > img');
//     let someHash = Math.floor(Math.random() * 90000) + 10000;
//     activeImg.src = `${activeImg}?${someHash}`;
//     console.log(activeImg.src);
//     // fetch(activeSlide.src);
// });

sliders.forEach(item => {
    new Glide(item, sliderConfig).mount();
});




