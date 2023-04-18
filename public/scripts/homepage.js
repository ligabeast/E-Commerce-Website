
const swiperHintergrund = new Swiper(".swiperHintergrund", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    allowTouchMove: false,

    autoplay: {
        delay: 5000,
    },
});

const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    pagination: {
        el: ".swiper-pagination",
    },
    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
