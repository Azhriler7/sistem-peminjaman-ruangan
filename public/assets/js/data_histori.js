$(document).ready(function() {
    var table = $('#tabelPinjaman').DataTable({
        paging: true,
        searching: true,
        info: true,
        lengthChange: true,
        pageLength: 10,
        language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            paginate: {
                previous: "previous",
                next: "next"
            },
            zeroRecords: "Data tidak ditemukan",
            infoEmpty: "Menampilkan 0 hingga 0 dari 0 data",
            infoFiltered: "(disaring dari _MAX_ total data)"
        },
        ajax: {
            url: 'ambil-data.php', // ganti sesuai file backend PHP kamu
            dataSrc: ''
        },
        dom: 'Blfrtip', // ini dia fix-nya
        buttons: [
            {
                extend: 'csvHtml5',
                title: 'Data_Pinjaman',
                exportOptions: {
                    columns: ':visible'
                },
                className: 'd-none'
            },
            {
                extend: 'pdfHtml5',
                title: 'Data_Pinjaman',
                exportOptions: {
                    columns: ':visible'
                },
                className: 'd-none'
            }
        ],
        columns: [
            { data: 'no' },
            { data: 'tanggal_acara' },
            { data: 'nama_ruang' },
            { data: 'nama_acara' },
            { data: 'status_acara' },
        ]
    });

    $('#btn-csv').on('click', function() {
        table.button('.buttons-csv').trigger();
    });

    $('#btn-pdf').on('click', function() {
        table.button('.buttons-pdf').trigger();
    });

    // Opsional: reload data otomatis setiap 10 detik
    setInterval(function() {
        table.ajax.reload(null, false);
    }, 10000);
});
