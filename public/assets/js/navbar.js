const navLinks = document.querySelectorAll('.content1-navbar5-mz5 li');
const navLinks2 = document.querySelectorAll('.sidebare ul li a');
const sidebare = document.querySelector('.sidebare');
const btnClose = document.getElementById('btn-close');
const btnToggle = document.getElementById('btn-toggle');
const about2 = document.getElementById('about2');

// Fungsi untuk menyembunyikan sidebar
function hideSidebar() {
    sidebar.style.left = '-100%';
}

// Menambahkan event listener pada setiap elemen li
navLinks2.forEach((li) => {
    li.addEventListener('click', hideSidebar);
});

// Fungsi untuk menangani klik pada elemen <li>
const handleNavClick = (event) => {
    // Hapus kelas 'active' dari semua elemen <li>
    navLinks.forEach((navLink) => {
        navLink.classList.remove('active');
    });
    
    // Tambahkan kelas 'active' ke elemen <li> yang diklik
    event.target.closest('li').classList.add('active');
    
    // Sembunyikan sidebar ke kiri
}

// Tambahkan event listener untuk setiap elemen <li>
navLinks.forEach((navLink) => {
    navLink.addEventListener('click', handleNavClick);
});

btnClose.addEventListener('click', () => {
    // Sembunyikan sidebar ke kiri
    sidebare.style.left = '-100%';
});

btnToggle.addEventListener('click', () => {
    // Tampilkan sidebar
    sidebare.style.left = '0%';
});

about2.addEventListener('click', () => {
    // Tampilkan sidebar
    sidebare.style.left = '0%';
});
