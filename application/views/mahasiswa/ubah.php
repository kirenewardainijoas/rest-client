<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Nasabah
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $nasabah['id']; ?>">
                        <div class="form-group">
                            <label for="first_name">First_Name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name" value="<?= $nasabah['first_name']; ?>">
                            <small class="form-text text-danger"><?= form_error('first_name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name" value="<?= $nasabah['last_name']; ?>">
                            <small class="form-text text-danger"><?= form_error('last_name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $nasabah['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender">
                                <?php foreach ($gender as $g) : ?>
                                    <?php if ($g == $nasabah['gender']) : ?>
                                        <option value="<?= $g; ?>" selected><?= $g; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $g ?>"><?= $g; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>