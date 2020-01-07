<div class="row">
    <div class="col-lg-2">
        <img src="<?= base_url('assets/img/' . $toko->foto_toko) ?>" class="w-75">
    </div>
    <div class="col-lg-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 mb-2 p-2 border-danger" style="border-style:dashed;">
                        <h5 class="card-title"><i class="fa fa-store mr-2 text-dark"></i><?= $toko->nama_toko ?></h5>
                        <p class="card-text ml-4 pl-2"><?= $toko->slogan ?></p>
                        <p class="card-text"><i class="fa fa-map-marker mr-3"></i><?= $toko->alamat_toko ?></p>
                        <p class="card-text"><i class="fa fa-phone mr-3"></i><?= $toko->no_hp_toko ?></p>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <h5 class="card-title"><i class="fa fa-user mr-3 text-dark"></i><?= $toko->nama ?></h5>
                        <p class="card-text"><i class="fa fa-envelope mr-3"></i><?= $toko->email ?></p>
                        <p class="card-text"><i class="fa fa-phone mr-3"></i><?= $toko->no_hp ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Barang -->
<div class="row mt-4 mb-3" style="border-style:dotted; border-top:none; border-left:none; border-right:none;">
    <div class="text-dark h6 col-lg-6">
        Daftar Barang
    </div>
    <div class="col-lg-6">
        <a href="#" class="float-right text-danger tambah-barang" data-toggle="modal" data-target="#barangModal" data-toko="<?= $toko->id_toko ?>" data-url="<?= base_url('barangController/') ?>">
            <i class="fa fa-plus"></i>
            Tambah
        </a>
    </div>
</div>
<div class="row">
    <?php foreach ($dataBarang as $barang) { ?>
        <div class="col-lg-4 mt-2">
            <div class="card data-barang" data-toggle="modal" data-target="#detailBarangModal" data-id="<?= $barang->id_barang ?>" data-url="<?= base_url('barangController/') ?>" data-toko="<?= $barang->id_toko ?>">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?= base_url('assets/img/' . $barang->foto_barang) ?>" class="w-100 h-100">
                        </div>
                        <div class="col-sm-8 mt-2 pl-4 pr-3">
                            <div class="card-title h5"><?= $barang->nama_barang ?></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="card-text"><?= $barang->kategori ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-danger card-text">
                                        <label class="small">Rp</label><?= $barang->harga ?>
                                    </div>
                                    <div class="card-text">
                                        <?= $barang->stok ?> Barang Tersisa
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>