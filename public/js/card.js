var cards = document.querySelectorAll(".card");

cards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const { x, y } = card.getBoundingClientRect();
        card.style.setProperty("--x", (e.clientX - x) / card.clientWidth - 0.5);
        card.style.setProperty("--y", (e.clientY - y) / card.clientHeight - 0.5);
    });
});