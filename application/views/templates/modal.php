<!-- Login Modal-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content gradient1">
            <div class="modal-header">
                <h5 class="modal-title text-light" id="exampleModalLabel">Ready to Login ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-orange" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="<?= base_url('homeController/') ?>">Login</a>
            </div>
        </div>
    </div>
</div>

<!-- Barang Modal-->
<div class="modal fade" id="barangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content gradient1">
            <div class="modal-header">
                <h5 class="modal-title text-light" id="exampleModalLabelBarang">Tambah Barang</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light">×</span>
                </button>
            </div>
            <form action="<?php if ($toko) ?><?= base_url('barangController/tambahBarang/' . $toko->id_toko) ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Nama Barang">
                    </div>
                    <div class="form-group">
                        <label for="Kategori" class="text-light">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <?php if ($kategori) { ?>
                                <?php foreach ($kategori as $k) { ?>
                                    <option value="<?= $k->id_kategori ?>"><?= $k->kategori ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="number" name="stok" id="stok" class="form-control" placeholder="Stok">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <i class="fa fa-shopping-basket text-light" style="font-size:50pt;"></i>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <input type="file" name="foto" id="foto" class="form-control mt-4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-orange" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger modalTombolBarang" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Detail Barang Modal-->
<?php if (isset($dataBarang) && isset($toko)) { ?>
    <div class="modal fade" id="detailBarangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-lg-4 img-content" data-url="<?= base_url('assets/img/') ?>">
                            <img class="w-100 h-100">
                        </div>
                        <div class="col-sm-8 mt-3 pl-4">
                            <div class="card-title h5 nama-barang">nama_barang</div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="card-text kategori">Kategori</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-danger card-text">
                                        <label class="small">Rp</label><label class="harga"></label>
                                    </div>
                                    <div class="card-text stok">
                                        Barang Tersisa
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <p class="card-text">
                                        <i class="fa fa-map-marker"></i>
                                        <?= $toko->alamat_toko ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-orange" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger hapusBarang" href="">Delete</a>
                    <a class="btn btn-orange ubahBarang" href="#" data-toggle="modal" data-target="#barangModal" data-dismiss="modal">Ubah</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Hapus Modal-->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda yakin ingin hapus data ini ?</div>
            <div class="modal-footer">
                <button class="btn btn-orange" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btnHapus" href="">Hapus</a>
            </div>
        </div>
    </div>
</div>