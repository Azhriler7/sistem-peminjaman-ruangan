
document.getElementById('uploadInput').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
        if (file.size > 5 * 1024 * 1024) {
            alert("File terlalu besar. Maksimal 5MB.");
            return;
        }

        if (!file.type.startsWith('image/')) {
            alert("Hanya file gambar (JPG atau PNG) yang diperbolehkan.");
            return;
        }

        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('profileImage').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const navToggle = document.querySelector(".mobile-nav-toggle");
    const navMenu = document.getElementById("navmenu");

    // Toggle mobile menu
    navToggle.addEventListener("click", function () {
        navMenu.classList.toggle("active");
    });

    // Dropdown toggle functionality
    const dropdownLinks = document.querySelectorAll(".navmenu .dropdown > a");

    dropdownLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const dropdown = this.parentElement;
            dropdown.classList.toggle("active");
        });
    });

    // Close menu if clicking outside (optional)
    document.addEventListener("click", function (e) {
        if (!navMenu.contains(e.target) && !navToggle.contains(e.target)) {
            navMenu.classList.remove("active");
            const dropdowns = document.querySelectorAll(".navmenu .dropdown");
            dropdowns.forEach(dropdown => {
                dropdown.classList.remove("active");
            });
        }
    });
});
