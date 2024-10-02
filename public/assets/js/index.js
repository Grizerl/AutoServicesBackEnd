document.addEventListener("DOMContentLoaded", () => {
    const preload = document.querySelector("[data-preload]");
    setTimeout(()=>{
        preload.classList.add("loaded");
    },400) 
   
});
var Myswiper = new Swiper(".mySwiper", {
    slidesPerView: 4, // Кількість слайдів на екрані
    loop: true,
    spaceBetween: 25, // Зменшено відстань між слайдами
    infinite: true, //=loop: true,
    autoplay: true, //Вмикає автоматичне перемикання слайдів.
    autoplaySpeed: 2000, // Встановлює швидкість автоматичного перемикання слайдів
    speed: 1000,//Визначає швидкість анімації при перемиканні слайдів.			 	
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
