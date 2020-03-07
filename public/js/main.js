$(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
    $('.tombolTambahSiswa').on('click', function () {
        $('#formModalLabel').html("Tambah Data Siswa");
        $('.modal-footer button[type=submit]').html("Tambah Data");
        $('.modal-body form').attr("action", "http://localhost/phpmvc/public/siswa/tambah");
        $('#id').val(null);
        $('#nama').val(null);
        $('#nis').val(null);
        $('#email').val(null);
        $('#jurusan').val("Jurusan");
    });


    $('.tampilModalUbah').on('click', function () {
        $('#formModalLabel').html("Ubah Data Siswa");
        $('.modal-footer button[type=submit]').html("Ubah Data");
        $('.modal-body form').attr("action", "http://localhost/phpmvc/public/siswa/ubah");

        const id = $(this).data("id");

        $.ajax({
            url: "http://localhost/phpmvc/public/siswa/getubah",
            data: {
                id: id
            },
            method: "post",
            dataType: "json",
            success: function (data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#nis').val(data.nis);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
            }
        });

    });


})