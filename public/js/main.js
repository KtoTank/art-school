document.addEventListener('DOMContentLoaded', function () {
    const mySwiper = new Swiper('.swiper-link-1', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        initialSlide: 1, // Начинать со второго слайда
        coverflowEffect: {
            rotate: 0,
            stretch: 100,
            depth: 300,
            modifier: 1.5,
            slideShadows: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });


    const mySwiper2 = new Swiper('.swiper-link-2', {
        grabCursor: true,
        slidesPerView: 4,
        initialSlide: 1,
        spaceBetween: 20,
        breakpoints: {
            1600: {
                slidesPerView: 4,
            },
            996: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            420: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
        },

        navigation: {
            nextEl: '.swiper-button-next-outline',
            prevEl: '.swiper-button-prev-outline',
        },
    });

    const mySwiper3 = new Swiper('.swiper-link-3', {
        grabCursor: true,
        slidesPerView: 2,
        spaceBetween: 40,
        breakpoints: {
            1600: {
                slidesPerView: 2,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            420: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
        },

        navigation: {
            nextEl: '.swiper-button-next-outline-2',
            prevEl: '.swiper-button-prev-outline-2',
        },

        pagination: {
            el: '.swiper-pagination.sp2'
        }
    });


    const phoneInput = document.getElementById('phone');
    phoneInput.addEventListener('input', function () {
        let input = phoneInput.value.replace(/\D/g, '').substring(0, 12);
        let firstPart = input.substring(0, 2);
        let secondPart = input.substring(2, 5);
        let thirdPart = input.substring(5, 8);
        let fourthPart = input.substring(8, 12);

        if (input.length > 2) {
            input = `(${firstPart})`;
        }
        if (input.length > 5) {
            input = `(${firstPart}) ${secondPart}`;
        }
        if (input.length > 8) {
            input = `(${firstPart}) ${secondPart}-${thirdPart}`;
        }
        if (input.length > 12) {
            input = `(${firstPart}) ${secondPart}-${thirdPart}-${fourthPart}`;
        }

        phoneInput.value = input;
    });

});
