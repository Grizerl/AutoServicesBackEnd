document.addEventListener("DOMContentLoaded", () => {
    const preload = document.querySelector("[data-preload]");
    setTimeout(()=>{
        preload.classList.add("loaded");
    },400) 
   
});

var Myswiper = new Swiper(".mySwiper", {

    loop: true,
    spaceBetween: 25,
    infinite: true, 
    autoplay: true, 
    autoplaySpeed: 2000, 
    speed: 1000,
    breakpoints: {
        1150: {
            slidesPerView: 4
        },
        868: {
            slidesPerView: 3
        },
        600: {
            slidesPerView: 2
        },
        200: {
            slidesPerView: 1
        }
    }
                 
});

var Myswiper = new Swiper(".SwiperTeam", {
    slidesPerView: 3,
    loop: true,
    spaceBetween: 25, 
    infinite: true, 
    autoplay: true, 
    autoplaySpeed: 2000, 
    speed: 1000,		
    breakpoints: {
       760: {
        slidesPerView: 3
       },
       500: {
        slidesPerView: 2
       },
       200: {
        slidesPerView: 1
       },
    } 	
}); 

const swiper_1 = new Swiper('.swiper-1', {
    loop: true,
    effect: 'fade',
    fadeEffect: {
        crossFade: true 
    },
    autoplay:{
        delay:3500, 
        disableOnInteraction:false,
    },
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
const swiper_2 = new Swiper('.swiper-2', {
    effect: 'flip',
    flipEffect: {
        slideShadows:true,
        limitRotation:true
    },
    navigation: {
    nextEl: '.swiper-button-next-2',
    prevEl: '.swiper-button-prev-2',
  },
});

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('client-say-link').addEventListener('click', function (e) {
        e.preventDefault();
        window.location.href = '/AutoStyle#client-say';  
    });
});

document.addEventListener("DOMContentLoaded",()=>{
window.addEventListener('load', function () {
    if (window.location.hash) {
        const element = document.querySelector(window.location.hash);
        if (element) {
            element.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.querySelector('.burger-menu');
    const menuContainer = document.querySelector('.menu-container');
    const closeButton = document.querySelector('.close-btn');

    function toggleMenu() {
        menuContainer.classList.toggle('active');
    }

    burgerMenu.querySelector('.burger-icon').addEventListener('click', toggleMenu);

    closeButton.addEventListener('click', toggleMenu);
});

