$(document).ready(function () {
    $('#tabelPinjaman').DataTable({
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
                previous: "Sebelumnya",
                next: "Berikutnya"
            },
            zeroRecords: "Data tidak ditemukan",
            infoEmpty: "Menampilkan 0 hingga 0 dari 0 data",
            infoFiltered: "(disaring dari _MAX_ total data)"
        },
        dom: 'Blfrtip',
        buttons: [
            {
                extend: 'csvHtml5',
                title: 'Data_Pinjaman',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Data_Pinjaman',
                exportOptions: {
                    columns: ':visible'
                }
            }
        ]
    });

    // Trigger tombol export manual (jika kamu pakai tombol custom)
    $('#btn-csv').on('click', function () {
        $('.buttons-csv').click();
    });

    $('#btn-pdf').on('click', function () {
        $('.buttons-pdf').click();
    });
});
