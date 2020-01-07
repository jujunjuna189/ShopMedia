 <form action="<?= $action ?>" method="post">
     <div class="row">
         <div class="col-lg-8">
             <div class="card">
                 <div class="card-body border-left-orange border-top-orange">
                     <div class="form-group">
                         <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama....">
                     </div>
                     <div class="form-group">
                         <input type="email" name="email" id="email" class="form-control" placeholder="Email....">
                     </div>
                     <div class="form-group">
                         <input type="password" name="password" id="password" class="form-control" placeholder="Password....">
                     </div>
                     <div class="form-group">
                         <select name="jk" id="jk" class="form-control">
                             <option value="Laki-laki">Laki-laki</option>
                             <option value="Perempuan">Perempuan</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="No Hp....">
                     </div>
                     <div class="form-group">
                         <select name="role" id="role" class="form-control">
                             <?php foreach ($user_role as $role) { ?>
                                 <option value="<?= $role->id_role ?>"><?= $role->role ?></option>
                             <?php } ?>
                         </select>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-orange">Submit</button>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-lg-4">
             <div class="card">
                 <div class="card-body border-bottom-orange gradient1 border-right-orange">
                     <div class="form-group text-center">
                         <img src="<?= base_url('assets/img/default.png') ?>" class="w-50">
                     </div>
                     <div class="input-group">
                         <div class="cuntom-file">
                             <input type="file" name="foto" id="inputGroupFile02" class="custom-file-input">
                             <label class="custom-file-label" for="inputGroupFile01" aria-describedby="inputGroupFileAddon02">Choose File</label>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </form>