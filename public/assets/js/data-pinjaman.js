$(document).ready(function () {
  $('#tabelPinjaman').DataTable();
});

document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
  document.getElementById('navmenu').classList.toggle('active');
});

$(document).ready(function() {
  $('#tabelPinjaman').DataTable({
    ajax: {
      url: 'http://localhost:3000/api/pinjaman',
      dataSrc: ''
    },
    columns: [
      { data: 'id' },
      { data: 'tanggal_acara' },
      { data: 'nama_ruang' },
      { data: 'nama_acara' },
      { data: 'status_acara' },
      { data: 'aksi' }
    ]
  });
});
