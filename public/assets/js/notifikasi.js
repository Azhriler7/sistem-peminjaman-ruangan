// Menambahkan data notifikasi dari database
const notifications = [
    { title: "Request Password", from: "username.user", type: "password" },
    { title: "Request Ruangan", from: "username.user", type: "ruangan" }
];

const notifList = document.getElementById('notif-list');

// Menampilkan notifikasi dalam bentuk yang bisa diklik
notifications.forEach((notif) => {
    const item = document.createElement('div');
    item.className = 'notif-item d-flex justify-content-between align-items-center';  // Gunakan flexbox untuk letakkan tombol di ujung

    // Menambahkan tautan atau event listener sesuai dengan jenis notifikasinya
    if (notif.type === "ruangan") {
        item.innerHTML = `
            <div class="notif-content d-flex justify-content-between align-items-center w-100"> 
                <div>
                    <div class="notif-title">${notif.title}</div>
                    <div class="notif-from">From: ${notif.from}</div>
                </div>
                <!-- Tombol panah untuk menuju halaman ruangan -->
                <button class="btn btn-primary" onclick="goToRoomPage()">
                    <i class="bi bi-arrow-right-circle"></i> Ke Ruangan
                </button>
            </div>
        `;
    } else if (notif.type === "password") {
        item.innerHTML = `
            <div class="notif-content d-flex justify-content-between align-items-center w-100"> 
                <div>
                    <div class="notif-title">${notif.title}</div>
                    <div class="notif-from">From: ${notif.from}</div>
                </div>
                <!-- Tombol ACC -->
                <button class="btn btn-success" onclick="approvePasswordRequest('${notif.from}')">
                    <i class="bi bi-check2-circle"></i> 
                </button>
            </div>
        `;
    }

    notifList.appendChild(item);
});

// Fungsi untuk menangani persetujuan permintaan password
function approvePasswordRequest(username) {
    // Tindakan untuk menyetujui request password (misalnya, mengubah status di database)
    alert(`Password request from ${username} has been approved!`);

    // Kamu bisa mengarahkan ke halaman lain atau melakukan aksi lain di sini
    // window.location.href = "halaman-acc-password.html";  // Contoh pengalihan halaman
}

// Fungsi untuk mengarahkan ke halaman request ruangan
function goToRoomPage() {
    // Mengarahkan ke halaman ruangan yang diinginkan
    window.location.href = "data_pinjaman_admin.blade.php";  // Ganti dengan halaman yang sesuai
}

document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
    document.getElementById('navmenu').classList.toggle('active');
});

function goToRoomPage() {
    window.location.href = '/admin/ruangan'; // sesuaikan dengan route Anda
  }
  
  function approvePasswordRequest(userEmail) {
    if (confirm('Setujui permintaan ubah password dari ' + userEmail + '?')) {
      fetch(`/admin/approve-password?email=${encodeURIComponent(userEmail)}`, {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
          'Content-Type': 'application/json'
        }
      }).then(res => {
        if (res.ok) {
          alert('Permintaan disetujui.');
          location.reload();
        } else {
          alert('Gagal menyetujui permintaan.');
        }
      });
    }
  }
  
  function viewPeminjamanDetail(id) {
    window.location.href = `/admin/peminjaman/${id}`; // sesuaikan route detail Anda
  }
  