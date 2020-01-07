$(document).ready(function () {
    ambilData();
    tambahDataBarang();
    ubahDataBarang();
});

function ambilData() {
    $('.data-barang').on('click', function () {
        const idBarang = $(this).data('id');
        const idToko = $(this).data('toko');
        const url = $(this).data('url');
        const urlImg = $('.img-content').data('url');

        $.ajax({
            url: url + 'dataBarangById/' + idBarang,
            type: 'post',
            dataType: 'json',
            success: function (data) {
                $('.img-content img').attr('src', urlImg + data.foto_barang);
                $('.nama-barang').html(data.nama_barang);
                $('.kategori').html(data.kategori);
                $('.harga').html(data.harga);
                $('.stok').html(data.stok + ' Barang Tersisa');
                $('.hapusBarang').attr('href', url + 'hapusBarang/' + idBarang + '/' + idToko);
                $('.ubahBarang').attr('data-id', idBarang);
                $('.ubahBarang').attr('data-toko', idToko);
                $('.ubahBarang').attr('data-url', url);
            }
        });
    });
}

function tambahDataBarang() {
    $('.tambah-barang').on('click', function () {
        const idToko = $(this).data('toko');
        const url = $(this).data('url');
        $('#exampleModalLabelBarang').html('Tambah Barang');
        $('.modalTombolBarang').html('Tambah');
        $('#barangModal form').attr('action', url + 'tambahBarang/' + idToko);
        $('#nama_barang').val('');
        $('#harga').val('');
        $('#stok').val('');
    });
}

function ubahDataBarang() {
    $('.ubahBarang').on('click', function () {
        const idBarang = $(this).data('id');
        const idToko = $(this).data('toko');
        const url = $(this).data('url');
        $('#exampleModalLabelBarang').html('Ubah Barang');
        $('.modalTombolBarang').html('Ubah');
        $('#barangModal form').attr('action', url + 'ubahBarang/' + idBarang + '/' + idToko);

        $.ajax({
            url: url + 'dataBarangById/' + idBarang,
            type: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama_barang').val(data.nama_barang);
                $('#kategori').val(data.id_kategori);
                $('#harga').val(data.harga);
                $('#stok').val(data.stok);
            }
        });
    });
}