const swiper = new Swiper(".gallerySwiper", {

    loop: true,

    spaceBetween: 20,

    slidesPerView: 1,

    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    breakpoints: {

        768: {
            slidesPerView: 2,
        },

        1024: {
            slidesPerView: 3,
        }

    }

});