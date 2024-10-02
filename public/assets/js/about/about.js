document.addEventListener("DOMContentLoaded", function() {
    var swiper = new Swiper(".mySwiper-3", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".according-bth").forEach(btn => {
        btn.addEventListener('click', () => {
            const content = btn.parentElement.nextElementSibling; // Get the paragraph after the parent container
            btn.classList.toggle('active');

            if (content.style.maxHeight) {
                content.style.maxHeight = null; // Collapse
            } else {
                content.style.maxHeight = content.scrollHeight + "px"; // Expand
            }
        });
    });
});
