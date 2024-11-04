document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll(".heroo-right .animationimg");
    let currentImageIndex = 0;

    // Tampilkan hanya gambar pertama pada awal
    images.forEach((img, index) => {
      img.classList.toggle("active", index === 0);
    });

    // Fungsi untuk mengubah gambar dengan animasi
    function changeImage() {
      // Hilangkan kelas aktif dari gambar saat ini
      images[currentImageIndex].classList.remove("active");
      
      // Pindah ke gambar berikutnya
      currentImageIndex = (currentImageIndex + 1) % images.length;
      
      // Tambahkan kelas aktif pada gambar berikutnya
      images[currentImageIndex].classList.add("active");
    }

    // Ubah gambar setiap 3 detik
    setInterval(changeImage, 3000);
  });


// Pengkondisian icon panah 
document.addEventListener("DOMContentLoaded", function () {
    const products = document.querySelectorAll(".card-wrapper");
    const nextButton = document.getElementById("next");
    const prevButton = document.getElementById("prev");
    const dotsContainer = document.querySelector(".dots-container");

    let currentSlide = 0;
    const productsPerSlide = 3;
    const totalSlides = Math.ceil(products.length / productsPerSlide);

    // Function to update slide
    function updateSlide() {
        // Hide all products
        products.forEach(product => {
            product.style.display = "none";
        });

        // Show only products in the current slide range
        const start = currentSlide * productsPerSlide;
        const end = start + productsPerSlide;
        for (let i = start; i < end; i++) {
            if (products[i]) {
                products[i].style.display = "block";
            }
        }

        // Update visibility of navigation buttons
        prevButton.style.display = currentSlide === 0 ? "none" : "inline-block";
        nextButton.style.display = currentSlide === totalSlides - 1 ? "none" : "inline-block";

        // Update dots' active state
        dotsContainer.innerHTML = ''; // Clear existing dots
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement("span");
            dot.classList.add("dot");
            if (i === currentSlide) dot.classList.add("active");
            dot.addEventListener("click", () => {
                currentSlide = i;
                updateSlide();
            });
            dotsContainer.appendChild(dot);
        }
    }

    // Event listeners for navigation buttons
    nextButton.addEventListener("click", function () {
        if (currentSlide < totalSlides - 1) {
            currentSlide++;
            updateSlide();
        }
    });

    prevButton.addEventListener("click", function () {
        if (currentSlide > 0) {
            currentSlide--;
            updateSlide();
        }
    });

    // Initialize carousel
    updateSlide();
});

// Buat pengkondisian tanda panah



document.addEventListener("DOMContentLoaded", function () {
    const contactCards = document.querySelectorAll(".profile-card");
    const contactPrevButton = document.getElementById("prevv");
    const contactNextButton = document.getElementById("nextt");
    const contactDotsContainer = document.querySelector(".dotss-container");

    let contactCurrentSlide = 0;
    const contactsPerSlide = 3;
    const totalContactSlides = Math.ceil(contactCards.length / contactsPerSlide);

    // Function to update contact slide
    function updateContactSlide() {
        // Hide all contact cards
        contactCards.forEach(card => card.style.display = "none");

        // Show only contacts in the current slide range
        const start = contactCurrentSlide * contactsPerSlide;
        const end = start + contactsPerSlide;
        for (let i = start; i < end; i++) {
            if (contactCards[i]) contactCards[i].style.display = "block";
        }

        // Update visibility of navigation buttons
        contactPrevButton.style.display = contactCurrentSlide === 0 ? "none" : "inline-block";
        contactNextButton.style.display = contactCurrentSlide === totalContactSlides - 1 ? "none" : "inline-block";

        // Update dots' active state
        contactDotsContainer.innerHTML = ''; // Clear existing dots
        for (let i = 0; i < totalContactSlides; i++) {
            const dot = document.createElement("span");
            dot.classList.add("dott");
            if (i === contactCurrentSlide) dot.classList.add("activee");
            dot.addEventListener("click", () => {
                contactCurrentSlide = i;
                updateContactSlide();
            });
            contactDotsContainer.appendChild(dot);
        }
    }

    // Event listeners for contact navigation buttons
    contactNextButton.addEventListener("click", function () {
        if (contactCurrentSlide < totalContactSlides - 1) {
            contactCurrentSlide++;
            updateContactSlide();
        }
    });

    contactPrevButton.addEventListener("click", function () {
        if (contactCurrentSlide > 0) {
            contactCurrentSlide--;
            updateContactSlide();
        }
    });

    // Initialize contact carousel
    updateContactSlide();
});



// window.addEventListener('scroll', function () {
//     const aboutSection = document.querySelector('.about-section');
//     const scrollPosition = window.scrollY;

//     if (scrollPosition > 100) {
//       aboutSection.classList.add('scrolled');
//     } else {
//       aboutSection.classList.remove('scrolled');
//     }
//   });
const navbarToggler = document.querySelector(".navbar-toggler");
const arrowIcon = document.getElementById("arrowIcon");
const navbarCollapse = document.getElementById("navbarNav");
const copyrightText = document.querySelector(".copyright-text");

navbarToggler.addEventListener("click", function() {
    if (navbarCollapse.classList.contains("show")) {
        arrowIcon.classList.add("hidden");
    } else {
        arrowIcon.classList.remove("d-none");
        setTimeout(() => {
            arrowIcon.classList.remove("hidden");
            copyrightText.classList.remove("d-none"); // Tampilkan teks copyright
        }, 10);
    }
});

arrowIcon.addEventListener("click", function() {
    navbarCollapse.classList.add("slide-out");
    arrowIcon.classList.add("hidden");

    setTimeout(function() {
        navbarCollapse.classList.remove("show");
        navbarCollapse.classList.remove("slide-out");
        arrowIcon.classList.add("d-none");
        copyrightText.classList.add("d-none"); // Sembunyikan teks sepenuhnya setelah transisi
    }, 300);
});

document.addEventListener("click", function(event) {
    if (navbarCollapse.classList.contains("show") &&
        !navbarCollapse.contains(event.target) &&
        !navbarToggler.contains(event.target)) {

        navbarCollapse.classList.add("slide-out");
        arrowIcon.classList.add("hidden");

        setTimeout(function() {
            navbarCollapse.classList.remove("show");
            navbarCollapse.classList.remove("slide-out");
            arrowIcon.classList.add("d-none");
            copyrightText.classList.add("d-none"); // Sembunyikan teks sepenuhnya setelah transisi
        }, 300); 
    }
});

