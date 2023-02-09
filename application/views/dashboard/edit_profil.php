<div class="container">
    <h1>Edit Profile</h1>
      <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Edit Profile Saya</h6>
      </div>
        <div class="card-body">
        <div class="col-lg-8">
            <?php echo form_open_multipart('dashboard/editprofil'); ?>
              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">NIK</label>
                <div class="col-sm-9">
                  : <?= $user['nik']; ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Bergabung Sejak</label>
                <div class="col-sm-9">
                  : <?= date('d F Y', $user['date_created']); ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="<?= $user['nama']; ?>">
                  <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat" value="<?= $user['alamat']; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="telpon" class="col-sm-3 col-form-label">Telpon :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="telpon" placeholder="telpon" name="telpon" value="<?= $user['telpon']; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="tempat_lahir" placeholder="tempat_lahir" name="tempat_lahir" value="<?= $user['tempat_lahir']; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir :</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="tgl_lahir" placeholder="tgl_lahir" name="tgl_lahir" value="<?= $user['tgl_lahir']; ?>">
                </div>
              </div>
              <div class="form-group row">
                    <div class="col-sm-3">Foto Profil : </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('uploads/foto/profil/'). $user['foto']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <input type="file" name="foto" class="dropify" id="foto" for="foto" value="">          
                            </div>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
                        <a href="<?php echo base_url('dashboard'); ?>">      
                            <button type="button" class="btn btn-secondary">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
      </div>
    </div>
</div>