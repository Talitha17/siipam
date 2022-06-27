<div class="container">
    <center>
        <h1>Hello, <?= $nama; ?>!</h1>
    </center>
</div>
<div class="container">
    <div class="row mt-4">
        <div class="col p">
            <h1>All Design</h1>

            <div class="row mt-3 mb-3">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari data design.." name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <?php foreach ($design as $row) : ?>

            <div class="col-md-4 mb-5">
                <div class="card-group">
                    <div class="card">
                        <img src="<?= $row["gambar"]; ?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['nama']; ?> - <?= $row['tahun']; ?></h5>
                            <div class="card-text">
                                <a href="<?= base_url(); ?>design/detail/<?= $row['id']; ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!--  Large modal 
<button class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Deskripsi Movie</button>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Deskripsi Movie</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p> $design['nama']; ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div> -->