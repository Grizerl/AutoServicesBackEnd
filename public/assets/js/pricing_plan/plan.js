document.addEventListener("DOMContentLoaded", () => {
    const btn_silver = document.getElementById("btn-silver-plan");
    const btn_platinum = document.getElementById("btn-platinum-plan");
    const btn_gold = document.getElementById("btn-gold-plan");

    const card_silver = document.getElementById("card-silver");
    const card_platinum = document.getElementById("card-platinum");
    const card_gold = document.getElementById("card-gold");

    // Функція для приховування всіх карток і видалення активного класу з кнопок
    const hideAllCardsAndResetButtons = () => {
        card_silver.classList.remove('show');
        card_platinum.classList.remove('show');
        card_gold.classList.remove('show');

        btn_silver.classList.remove('active');
        btn_platinum.classList.remove('active');
        btn_gold.classList.remove('active');
    };

    // Відображення Silver плану і активування кнопки
    btn_silver.addEventListener('click', (event) => {
        event.preventDefault();
        hideAllCardsAndResetButtons();
        card_silver.classList.add('show');
        btn_silver.classList.add('active');
    });

    // Відображення Platinum плану і активування кнопки
    btn_platinum.addEventListener('click', (event) => {
        event.preventDefault();
        hideAllCardsAndResetButtons();
        card_platinum.classList.add('show');
        btn_platinum.classList.add('active');
    });

    // Відображення Gold плану і активування кнопки
    btn_gold.addEventListener('click', (event) => {
        event.preventDefault();
        hideAllCardsAndResetButtons();
        card_gold.classList.add('show');
        btn_gold.classList.add('active');
    });
});

