<div class="container">
    <h1>Edit Profile</h1>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Edit Profile</h6>
      </div>
        <div class="card-body">
    <div class="row">
        <div class="col-lg-8">
            <?php echo form_open_multipart('pemilikkios/dashboard/edit'); ?>
              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="email" placeholder="Masukan Email Anda" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="nik" class="col-sm-3 col-form-label">NIK :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="nik" placeholder="Masukan NIK Anda" name="nik" value="<?= $user['nik']; ?>" readonly>
                  <small class="form-text text-danger"><?php echo form_error('nik'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Lengkap Anda" name="nama" value="<?= $user['nama']; ?>">
                  <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat Rumah Anda" name="alamat" value="<?= $user['alamat']; ?>">
                </div>
              </div>
               <div class="form-group row">
                <label for="npwp" class="col-sm-3 col-form-label">NPWP :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="npwp" placeholder="Masukan NPWP Anda" name="npwp" value="<?= $user['npwp']; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="namakios" class="col-sm-3 col-form-label">Nama Kios :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="namakios" placeholder="Masukan Nama Kios Anda" name="namakios" value="<?= $user['namakios']; ?>">
                </div>
              </div>
               <div class="form-group row">
                <label for="slogan" class="col-sm-3 col-form-label">Slogan :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="slogan" placeholder="Masukan Slogan Anda" name="slogan" value="<?= $user['slogan']; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="telpon" class="col-sm-3 col-form-label">Telpon :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="telpon" placeholder="Masukan No Telpon Anda" name="telpon" value="<?= $user['telpon']; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir :</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="tgl_lahir" placeholder="Masukan Tanggal Lahir Anda" name="tgl_lahir" value="<?= $user['tgl_lahir']; ?>">
                </div>
              </div>
              <div class="form-group row">
                    <div class="col-sm-3">Foto KTP : </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('uploads/foto/ktp/'). $user['fotoktp']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <input type="file" name="fotoktp" class="dropify" id="fotoktp" for="fotoktp" value="">          
                            </div>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">Foto KK : </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3">
                            <?php
                                if ($user['fotokk'] != null) { ?>
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('uploads/foto/kk/') . $user['fotokk']; ?>" alt="Foto KK">
                                <?php
                                }else{
                                    ?>
                                    <i style="color: red;">*</i> <i>Tidak Ada Data</i><br>
                                <?php
                                } ?>
                            </div>
                            <div class="col-sm-9">
                                <input type="file" name="fotokk" class="dropify" id="fotokk" for="fotokk" value="">          
                            </div>
                        </div>
                        <p></p>
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
                        <a href="<?php echo base_url('pemilikkios/dashboard'); ?>">      
                            <button type="button" class="btn btn-secondary">Batal</button>
                        </a>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
</div>
</div>