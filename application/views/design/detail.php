<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Design
                </div>
                <img class="card-img-top" src="<?= $design['gambar']; ?>" alt="Card image cap" width="150px" height="600px">
                <div class="card-body">
                    <h5 class="card-title"><?= $design['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $design['deskripsi']; ?></h6>
                    <p class="card-text"><?= $design['tahun']; ?></p>
                    <a href="<?= base_url(); ?>user" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>

<?= "<img src='image/" . $design['gambar'] . "'>" ?>