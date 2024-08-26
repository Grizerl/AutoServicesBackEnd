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
