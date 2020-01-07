$(document).ready(function () {
    ubahKategori();
});

function ubahKategori() {
    $('.ubahKategori').on('click', function () {
        const url = $(this).data('url');
        const id = $(this).data('id');

        $.ajax({
            url: url + 'dataKategoriById/' + id,
            type: 'post',
            dataType: 'json',
            success: function (data) {
                $('.formKategori form').attr('action', url + 'prosesUbahKategori/' + id);
                $('.btnUbahKategori').html('Ubah');
                $('#kategori_id').val(data.kategori);
            },
        });
    });
}