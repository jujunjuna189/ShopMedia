<div class="card">
    <div class="card-body">
        <div class="row p-2">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 text-center"></div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="input-group col-lg-10">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-orange border-0">
                                <span class="icon"><i class="fa fa-search text-light"></i></span>
                            </div>
                        </div>
                        <input type="text" class="border-0 bg-orange input-cari text-light form-control small px-3" id="inlineFormInputGroup" placeholder="Search...">
                    </div>
                    <div class="col-lg-2 text-center">
                        <a href="<?= base_url('userController/tambahAdmin/') ?>">
                            <span class="icon"><i class="fa fa-plus text-orange mt-3"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped w-100 shadow-lg">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No Hp</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($admin == []) { ?>
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data</td>
                        </tr>
                    <?php } else { ?>
                        <?php foreach ($admin as $ad) : ?>
                            <tr>
                                <td><img src="<?= base_url('assets/img/' . $ad->foto) ?>" style="width:50px; height:50px"></td>
                                <td><?= $ad->nama ?></td>
                                <td><?= $ad->email ?></td>
                                <td><?= $ad->no_hp ?></td>
                                <td><label class="rounded bg-primary text-light px-2"><?= $ad->role ?></label></td>
                                <td>
                                    <a class="dropdown-toggle" href="#" id="detailDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-orange small"><i class="fa fa-folder"></i></span>
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="detailDropdown">
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-list fa-sm fa-fw mr-2 text-primary"></i>
                                            Detail
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-ban fa-sm fa-fw mr-2 text-danger"></i>
                                            Blok
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-pen fa-sm fa-fw mr-2 text-warning"></i>
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-trash fa-sm fa-fw mr-2 text-danger"></i>
                                            Hapus
                                        </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php } ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col">
                    <?= $pagination ?>
                </div>
            </div>
        </div>
    </div>
</div>