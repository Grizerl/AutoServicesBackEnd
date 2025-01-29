document.addEventListener("DOMContentLoaded", () => {
    const btn_silver = document.getElementById("btn-silver-plan");
    const btn_platinum = document.getElementById("btn-platinum-plan");
    const btn_gold = document.getElementById("btn-gold-plan");

    const card_silver = document.getElementById("card-silver");
    const card_platinum = document.getElementById("card-platinum");
    const card_gold = document.getElementById("card-gold");

    const hideAllCardsAndResetButtons = () => {
        card_silver.classList.remove('show');
        card_platinum.classList.remove('show');
        card_gold.classList.remove('show');

        btn_silver.classList.remove('active');
        btn_platinum.classList.remove('active');
        btn_gold.classList.remove('active');
    };

    btn_silver.addEventListener('click', (event) => {
        event.preventDefault();
        hideAllCardsAndResetButtons();
        card_silver.classList.add('show');
        btn_silver.classList.add('active');
    });

    btn_platinum.addEventListener('click', (event) => {
        event.preventDefault();
        hideAllCardsAndResetButtons();
        card_platinum.classList.add('show');
        btn_platinum.classList.add('active');
    });

    btn_gold.addEventListener('click', (event) => {
        event.preventDefault();
        hideAllCardsAndResetButtons();
        card_gold.classList.add('show');
        btn_gold.classList.add('active');
    });
});

