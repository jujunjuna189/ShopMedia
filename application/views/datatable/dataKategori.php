<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($kategori == []) { ?>
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data</td>
                                </tr>
                            <?php } else { ?>
                                <?php foreach ($kategori as $ktgr) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $ktgr->kategori ?></td>
                                        <td>
                                            <a class="dropdown-toggle" href="#" id="detailDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="mr-2 d-none d-lg-inline text-orange small"><i class="fa fa-folder"></i></span>
                                            </a>
                                            <!-- Dropdown - User Information -->
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="detailDropdown">
                                                <a class="dropdown-item ubahKategori" href="#" data-id="<?= $ktgr->id_kategori ?>" data-url="<?= base_url('tokoController/') ?>">
                                                    <i class="fas fa-pen fa-sm fa-fw mr-2 text-warning"></i>
                                                    Edit
                                                </a>
                                                <a class="dropdown-item hapusData" href="#" data-toggle="modal" data-urlhapus="<?= base_url('tokoController/hapusKategori/' . $ktgr->id_kategori) ?>" data-target="#hapusModal">
                                                    <i class="fas fa-trash fa-sm fa-fw mr-2 text-danger"></i>
                                                    Hapus
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card formKategori">
            <div class="card-body">
                <div class="card-title">Form Kategori</div>
                <form action="<?= base_url('tokoController/tambahKategori/') ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="kategori" id="kategori_id" class="form-control" autocomplete="off" autofocus="true" placeholder="Kategori">
                    </div>
                    <div class="form-group text-right">
                        <a href="<?= base_url('tokoController/dataKategori/') ?>" class="btn btn-danger">Batal</a>
                        <button type="submit" class="btn btn-orange btnUbahKategori">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>