                       <!-- Begin Page Content -->
                       <div class="container-fluid">

                           <!-- Page Heading -->
                           <p class="p mb-4 text-gray-800 "><?= date('l, d F Y'); ?> </p>
                           <h1 class="h3 mb-4 text-gray-800"><?= $title ?> </h1>

                           <?= $this->session->flashdata('message'); ?>

                           <div class="row">
                               <div class="col-lg-6">

                                   <form action="<?= base_url('user/changepassword'); ?>" method="post">
                                       <div class="mb-3">
                                           <label for="current_password" class="form-label">Current Password</label>
                                           <input type="password" class="form-control" id="current_password" name="current_password">
                                           <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                       </div>
                                       <div class="mb-3">
                                           <label for="new_password1" class="form-label">New Password</label>
                                           <input type="password" class="form-control" id="new_password1" name="new_password1">
                                           <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                       <div class="mb-3">
                                           <label for="new_password2" class="form-label">Repeat Password</label>
                                           <input type="password" class="form-control" id="new_password2" name="new_password2">
                                           <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                       <div class="mb-3">
                                        <button type="submit" class="btn btn-success">Change Password</button>
                                       </div>
                                   </form>

                               </div>
                           </div>

                       </div>
                       <!-- /.container-fluid -->

                       </div>