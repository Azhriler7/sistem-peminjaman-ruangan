document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('showPasswordCheck');
    const passwordInput = document.getElementById('exampleInputPassword1');
  
    checkbox.addEventListener('change', function () {
      passwordInput.type = this.checked ? 'text' : 'password';
    });
  });
  
// Menangani toggle untuk menu mobile
document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
  // Menambahkan atau menghapus kelas 'active' pada navmenu untuk menampilkan menu
  document.getElementById('navmenu').classList.toggle('active');
});

