const slider = document.querySelector('.slider');
const sliderItems = document.querySelectorAll('.slider img');
const slideWidth = sliderItems[0].clientWidth;

function updateSlider() {
    slider.appendChild(sliderItems[0]); // Pindahkan gambar pertama ke akhir
}

setInterval(updateSlider, 10000); // Ganti gambar setiap 10 detik
