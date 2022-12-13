                       <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <p class="p mb-4 text-gray-800 "><?= date('l, d F Y'); ?> </p>
                    <h1 class="h3 mb-4 text-gray-800"><?= $title ?> </h1>

                    <div class="row">
                        <div class="col-lg-8">
                            <?= $this->session->flashdata('message'); ?>
                        </div>
                    </div>

                    <div class="card mb-3 col-lg-8">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="<?= base_url('assets/img/profile/') . $users['image'] ?>" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title"><?= $users['name']; ?></h3>
                            <p class="card-text">Email : <?= $users['email']; ?></p>
                            <p class="card-text">Asal : <?= $users['asal']; ?></p>
                            <p class="card-text">Divisi : <?= $users['divisi']; ?></p>
                            <p class="card-text">Lama Magang : <?= $users['lama']; ?></p>
                            <p class="card-text">Tanggal Masuk : <?= date('d F Y', $users['date_created']); ?></small></p>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          