    let currentIndex = 0;
const slides = document.querySelectorAll('.slide');

function showNextSlide() {
    // Sembunyikan gambar yang sekarang
    slides[currentIndex].classList.remove('active');

    // Increment index dan loop kembali jika perlu
    currentIndex = (currentIndex + 1) % slides.length;

    // Tampilkan gambar berikutnya
    slides[currentIndex].classList.add('active');
}

// Ganti gambar setiap 3 detik
setInterval(showNextSlide, 2500);
let currentKosIndex = 0;
const kosSlides = document.querySelectorAll('.kos-slide');

function showNextKos() {
    kosSlides[currentKosIndex].classList.remove('active');
    currentKosIndex = (currentKosIndex + 1) % kosSlides.length;
    kosSlides[currentKosIndex].classList.add('active');
}

function showPrevKos() {
    kosSlides[currentKosIndex].classList.remove('active');
    currentKosIndex = (currentKosIndex - 1 + kosSlides.length) % kosSlides.length;
    kosSlides[currentKosIndex].classList.add('active');
}

const viewKosButtons = document.querySelectorAll('.view-kos-btn');

viewKosButtons.forEach(button => {
    button.addEventListener('click', () => {
        alert("Menampilkan kos dekat: " + button.parentElement.querySelector('h3').innerText);
    });
});

