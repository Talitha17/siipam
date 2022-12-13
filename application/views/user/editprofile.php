                       <!-- Begin Page Content -->
                       <div class="container-fluid">

                           <!-- Page Heading -->
                           <p class="p mb-4 text-gray-800 "><?= date('l, d F Y'); ?> </p>
                           <h1 class="h3 mb-4 text-gray-800"><?= $title ?> </h1>

                          
                           <div class="row">
                               <div class="col-lg-8">

                                   <?= form_open_multipart('user/editprofile'); ?>
                                   <div class="row mb-3">
                                       <label for="email" class="col-sm-2 col-form-label">Email</label>
                                       <div class="col-sm-10">
                                           <input type="text" class="form-control" id="email" name="email" value="<?= $users['email']; ?>" readonly>
                                       </div>
                                   </div>
                                   <div class="row mb-3">
                                       <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                                       <div class="col-sm-10">
                                           <input type="text" class="form-control" id="name" name="name" value="<?= $users['name']; ?>">
                                           <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                   </div>
                                   <div class="row mb-3">
                                       <label for="asal" class="col-sm-2 col-form-label">Asal</label>
                                       <div class="col-sm-10">
                                           <input type="text" class="form-control" id="asal" name="asal" value="<?= $users['asal']; ?>">
                                       </div>
                                   </div>
                                   <div class="row mb-3">
                                       <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                                       <div class="col-sm-10">
                                           <input type="text" class="form-control" id="divisi" name="divisi" value="<?= $users['divisi']; ?>">
                                       </div>
                                   </div>
                                   <div class="row mb-3">
                                       <label for="lama" class="col-sm-2 col-form-label">Lama Magang</label>
                                       <div class="col-sm-10">
                                           <input type="text" class="form-control" id="lama" name="lama" value="<?= $users['lama']; ?>">
                                       </div>
                                   </div>
                                   <div class="row mb-3">
                                       <div class="col-sm-2">Picture</div>
                                       <div class="col-sm-10">
                                           <div class="row">
                                               <div class="col-sm-3">
                                                   <img src="<?= base_url('assets/img/profile/') . $users['image'] ?>" class="img-thumbnail">
                                               </div>
                                               <div class="col-sm-9">
                                                   <div class="mb-3">
                                                       <input class="form-control" type="file" id="image" name="image">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>

                                   <div class="form-group row justify-content-end">
                                       <div class="col-sm-10">
                                           <button type="submit" class="btn btn-primary">Edit</button>
                                       </div>
                                   </div>

                                   </form>

                               </div>
                           </div>

                       </div>
                       <!-- /.container-fluid -->

                       </div>