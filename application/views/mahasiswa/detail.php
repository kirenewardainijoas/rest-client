<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Nasabah
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $nasabah['first_name']; ?></h5>
                    <h6 class="card-title"><?= $nasabah['last_name']; ?></h6>
                    <h7 class="card-subtitle mb-2 text-muted"><?= $nasabah['email']; ?></h7>
                    <p class="card-text"><?= $nasabah['gender']; ?></p>
                    <a href="<?= base_url(); ?>nasabah" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>