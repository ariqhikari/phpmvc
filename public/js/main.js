$(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
    $('.tombolTambahSiswa').on('click', function () {
        $('#formModalLabel').html("Tambah Data Siswa");
        $('.modal-footer button[type=submit]').html("Tambah Data");
    });
    $('.tampilModalUbah').on('click', function () {
        $('#formModalLabel').html("Ubah Data Siswa");
        $('.modal-footer button[type=submit]').html("Ubah Data");
    });
})