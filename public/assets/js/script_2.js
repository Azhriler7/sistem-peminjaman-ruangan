// Mendengarkan perubahan pada checkbox
document.getElementById("showPasswordCheck").addEventListener("change", function() {
    // Mendapatkan elemen input password dan confirm password
    const passwordField = document.getElementById("inputPassword");
    const confirmPasswordField = document.getElementById("confirmPassword");

    // Mengubah tipe input menjadi text jika dicentang, atau kembali menjadi password jika tidak dicentang
    passwordField.type = this.checked ? "text" : "password";
    confirmPasswordField.type = this.checked ? "text" : "password";
});

  
// Menangani toggle untuk menu mobile
document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
    // Menambahkan atau menghapus kelas 'active' pada navmenu untuk menampilkan menu
    document.getElementById('navmenu').classList.toggle('active');
  });
  
  