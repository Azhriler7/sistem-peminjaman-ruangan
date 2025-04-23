document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('showPasswordCheck');
    const passwordInput = document.getElementById('exampleInputPassword1');
  
    checkbox.addEventListener('change', function () {
      passwordInput.type = this.checked ? 'text' : 'password';
    });
  });
  

document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
  document.getElementById('navmenu').classList.toggle('active');
});

