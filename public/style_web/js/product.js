document.addEventListener("DOMContentLoaded", function() {
    const nextBtn = document.getElementById("next");
    const prevBtn = document.getElementById("prev");
    const dotsContainer = document.querySelector(".dots-container");
    const cards = document.querySelectorAll(".card-wrapper");

    // Tentukan jumlah kartu per grup untuk desktop dan mobile
    let cardsPerGroup = window.innerWidth <= 768 ? 6 : 9;
    let currentGroup = 0;
    let totalGroups = Math.ceil(cards.length / cardsPerGroup);

    function createDots() {
        dotsContainer.innerHTML = "";
        for (let i = 0; i < totalGroups; i++) {
            const dot = document.createElement("span");
            dot.classList.add("dot");
            if (i === currentGroup) dot.classList.add("active");
            dot.addEventListener("click", function() {
                currentGroup = i;
                updateCarousel();
            });
            dotsContainer.appendChild(dot);
        }
    }

    function updateCarousel() {
        cards.forEach((card, index) => {
            if (index >= currentGroup * cardsPerGroup && index < (currentGroup + 1) * cardsPerGroup) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });

        const dots = dotsContainer.querySelectorAll(".dot");
        dots.forEach(dot => dot.classList.remove("active"));
        if (dots[currentGroup]) {
            dots[currentGroup].classList.add("active");
        }

        prevBtn.style.display = currentGroup === 0 ? "none" : "inline";
        nextBtn.style.display = currentGroup === totalGroups - 1 ? "none" : "inline";
    }

    nextBtn.addEventListener("click", function() {
        if (currentGroup < totalGroups - 1) {
            currentGroup++;
            updateCarousel();
        }
    });

    prevBtn.addEventListener("click", function() {
        if (currentGroup > 0) {
            currentGroup--;
            updateCarousel();
        }
    });

    window.addEventListener("resize", function() {
        cardsPerGroup = window.innerWidth <= 768 ? 6 : 9;
        totalGroups = Math.ceil(cards.length / cardsPerGroup);
        currentGroup = 0;
        createDots();
        updateCarousel();
    });

    createDots();
    updateCarousel();
});
