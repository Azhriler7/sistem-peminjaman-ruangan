

document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
    document.getElementById('navmenu').classList.toggle('active');
  });

// Memuat data pinjaman melalui AJAX
$(document).ready(function() {
  loadPinjamanData();

  function loadPinjamanData() {
      $.ajax({
          url: '',  // Ganti dengan URL API yang mengembalikan data pinjaman
          type: 'GET',
          success: function(response) {
              // Membersihkan tabel sebelum menambahkan data baru
              $('#pinjamanBody').empty();

              // Loop melalui data pinjaman yang diterima dari server
              response.pinjaman.forEach(function(pinjaman, index) {
                  var statusClass = pinjaman.status_acara === 'Menunggu' ? 'bg-warning text-dark' : (pinjaman.status_acara === 'Diterima' ? 'bg-success' : 'bg-danger');
                  var statusLabel = pinjaman.status_acara === 'Menunggu' ? 'Menunggu' : (pinjaman.status_acara === 'Diterima' ? 'Diterima' : 'Ditolak');

                  // Menambahkan baris data ke dalam tabel
                  var row = `
                      <tr>
                          <td>${index + 1}</td>
                          <td>${pinjaman.tanggal_acara}<br><small>${pinjaman.waktu_mulai} - ${pinjaman.waktu_selesai}</small></td>
                          <td>${pinjaman.nama_ruang}<br><small>${pinjaman.nama_gedung}</small></td>
                          <td>${pinjaman.nama_acara}</td>
                          <td><span class="badge ${statusClass}">${statusLabel}</span></td>
                          <td>
                              ${pinjaman.status_acara === 'Menunggu' ? `
                                  <button class="btn btn-success btn-sm" onclick="accPinjaman(${pinjaman.id})"><i class="bi bi-check2"></i></button>
                                  <button class="btn btn-danger btn-sm" onclick="tolakPinjaman(${pinjaman.id})"><i class="bi bi-x-lg"></i></button>
                              ` : ''}
                          </td>
                      </tr>
                  `;
                  $('#pinjamanBody').append(row);
              });
          },
          error: function() {
              alert('Gagal memuat data pinjaman');
          }
      });
  }

  // Fungsi untuk menerima pinjaman
  window.accPinjaman = function(id) {
      $.ajax({
          url: `/api/pinjaman/${id}/terima`,  // Ganti dengan URL untuk menerima pinjaman
          type: 'PUT',
          success: function(response) {
              loadPinjamanData();  // Memuat ulang data pinjaman setelah aksi
              alert('Pinjaman diterima');
          },
          error: function() {
              alert('Gagal menerima pinjaman');
          }
      });
  };

  // Fungsi untuk menolak pinjaman
  window.tolakPinjaman = function(id) {
      $.ajax({
          url: `/api/pinjaman/${id}/tolak`,  // Ganti dengan URL untuk menolak pinjaman
          type: 'PUT',
          success: function(response) {
              loadPinjamanData();  // Memuat ulang data pinjaman setelah aksi
              alert('Pinjaman ditolak');
          },
          error: function() {
              alert('Gagal menolak pinjaman');
          }
      });
  };
});
