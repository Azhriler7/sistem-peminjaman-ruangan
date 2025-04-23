
document.getElementById("showPasswordCheck").addEventListener("change", function() {
    const passwordField = document.getElementById("inputPassword");
    const confirmPasswordField = document.getElementById("confirmPassword");

    passwordField.type = this.checked ? "text" : "password";
    confirmPasswordField.type = this.checked ? "text" : "password";
});

  
document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
    document.getElementById('navmenu').classList.toggle('active');
  });
  
  