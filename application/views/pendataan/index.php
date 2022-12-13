                       <!-- Begin Page Content -->
                       <div class="container-fluid">

                           <!-- Page Heading -->
                           <p class="p mb-4 text-gray-800 "><?= date('l, d F Y'); ?> </p>
                           <h1 class="h3 mb-4 text-gray-800"><?= $title ?> </h1>

                           <div class="card">
                               <div class="card-body">
                                   <div class="table-responsive">
                                       <table class="table table-striped table-bordered table-hover" id="tableMahasiswa">
                                           <thead>
                                               <tr class="table-success">
                                                   <th></th>
                                                   <th>Email</th>
                                                   <th>Nama</th>
                                                   <th>Asal</th>
                                                   <th>Divisi</th>
                                                   <th>Lama Magang</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <?php foreach ($users as $row) : ?>
                                                   <tr>
                                                       <td>
                                                           <a href="<?= site_url('pendataan/edit/' . $row->id) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </a>
                                                           <a href="javascript:void(0);" data="<?= $row->id ?>" class="btn btn-danger btn-sm item-delete"><i class="fa fa-trash"></i> </a>
                                                       </td>
                                                       <td><?= $row->email ?></td>
                                                       <td><?= $row->name ?></td>
                                                       <td><?= $row->asal ?></td>
                                                       <td><?= $row->divisi ?></td>
                                                       <td><?= $row->lama ?></td>
                                                   </tr>
                                               <?php endforeach; ?>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                       </div>
                       
                       <!-- Modal dialog hapus data-->
                       <div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       Anda ingin menghapus data ini?
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                       <button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <script>
                           //menampilkan data ketabel dengan plugin datatables
                           $('#tableMahasiswa').DataTable();

                           //menampilkan modal dialog saat tombol hapus ditekan
                           $('#tableMahasiswa').on('click', '.item-delete', function() {
                               //ambil data dari atribute data 
                               var id = $(this).attr('data');
                               $('#myModalDelete').modal('show');
                               //ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete 
                               //pada controller mahasiswa
                               $('#btdelete').unbind().click(function() {
                                   $.ajax({
                                       type: 'ajax',
                                       method: 'get',
                                       async: false,
                                       url: '<?php echo base_url() ?>pendataan/delete/',
                                       data: {
                                           id: id
                                       },
                                       dataType: 'json',
                                       success: function(response) {
                                           $('#myModalDelete').modal('hide');
                                           location.reload();
                                       }
                                   });
                               });
                           });
                       </script>
                       