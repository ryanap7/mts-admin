const navLinks = document.querySelectorAll('.content1-navbar5-mz5 li');
const sidebare = document.querySelector('.sidebare');
const btnClose = document.getElementById('btn-close');
const btnToggle = document.getElementById('btn-toggle');

// Fungsi untuk menangani klik pada elemen <li>
function handleNavClick(event) {
    // Hapus kelas 'active' dari semua elemen <li>
    navLinks.forEach((navLink) => {
        navLink.classList.remove('active');
    });

    // Tambahkan kelas 'active' ke elemen <li> yang diklik
    event.target.closest('li').classList.add('active');
}

// Tambahkan event listener untuk setiap elemen <li>
navLinks.forEach((navLink) => {
    navLink.addEventListener('click', handleNavClick);
});

btnClose.addEventListener('click', () => {
    sidebare.style.left = '-100%'; /* Sembunyikan sidebar ke kiri */
});

btnToggle.addEventListener('click', () => {
    sidebare.style.left = '0%'; /* Tampilkan sidebar */
});
