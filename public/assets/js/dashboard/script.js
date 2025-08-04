const sidebar = document.getElementById('sidebar');
const toggleOpen = document.getElementById('toggleOpen');   // Tombol ☰ di navbar
const toggleClose = document.getElementById('toggleClose'); // Tombol ❌ di sidebar

// Buka sidebar
toggleOpen.addEventListener('click', () => {
  if (window.innerWidth < 768) {
    sidebar.classList.add('show');
  } else {
    sidebar.classList.remove('hide');
  }
  updateToggleVisibility();
});

// Tutup sidebar
toggleClose.addEventListener('click', () => {
  if (window.innerWidth < 768) {
    sidebar.classList.remove('show');
  } else {
    sidebar.classList.add('hide');
  }
  updateToggleVisibility();
});

// Atur tampilan tombol berdasarkan status sidebar
function updateToggleVisibility() {
  const isMobile = window.innerWidth < 768;
  const isHidden = isMobile ? !sidebar.classList.contains('show') : sidebar.classList.contains('hide');

  toggleOpen.classList.toggle('d-none', !isHidden); // Tampilkan ☰ jika sidebar tertutup
  toggleClose.classList.toggle('d-none', isHidden); // Tampilkan ❌ jika sidebar terbuka
}

// Saat pertama kali load
window.addEventListener('DOMContentLoaded', () => {
  if (window.innerWidth < 768) {
    sidebar.classList.remove('show');
  } else {
    sidebar.classList.remove('hide');
  }
  updateToggleVisibility();
});

// Saat resize layar
window.addEventListener('resize', updateToggleVisibility);
