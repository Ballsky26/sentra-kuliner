<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>pendaftar">Pendaftar</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pengajuan Pendaftar</li>
      </ol>
    </nav>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pendaftar No : <?= $pendaftar['id']; ?></h6>
      </div>
        <div class="card-body">
    <div class="row">
        <div class="col-lg-8">
    <form method="post" action="<?php base_url('pendaftar/pengajuan'); ?>" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $pendaftar['id']; ?>">
              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email : </label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="email" placeholder="Masukan Email Calon Pemilik" name="email" value="<?= $pendaftar['email']; ?>" readonly>
                </div>
              </div>
                  <input type="hidden" class="form-control" id="password" placeholder="Masukan password Calon Pemilik" name="password" value="<?= $pendaftar['password']; ?>" readonly>
              <div class="form-group row">
                <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nik" placeholder="Masukan NIK Calon Pemilik" name="nik" value="<?= $pendaftar['nik']; ?>" readonly>
                     <small class="form-text text-danger"><?php echo form_error('nik'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Tanggal Daftar</label>
                <div class="col-sm-9">
                  : <?= date('d F Y H:i', $pendaftar['tgldaftar']); ?>
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Calon Pemilik" name="nama" value="<?= $pendaftar['nama']; ?>" readonly>
                  <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="npwp" class="col-sm-3 col-form-label">NPWP :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="npwp" placeholder="Masukan NPWP Calon Pemilik" name="npwp" value="<?= $pendaftar['npwp']; ?>" readonly>
                  <small class="form-text text-danger"><?php echo form_error('npwp'); ?></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat Calon Pemilik" name="alamat" value="<?= $pendaftar['alamat']; ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="telpon" class="col-sm-3 col-form-label">Telpon :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="telpon" placeholder="Masukan Telpon Calon Pemilik" name="telpon" value="<?= $pendaftar['telpon']; ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="tgllahir" class="col-sm-3 col-form-label">Tanggal Lahir :</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="tgllahir" placeholder="Masukan Tanggal Lahir Calon Pemilik" name="tgllahir" value="<?= $pendaftar['tgllahir']; ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="tempatlahir" class="col-sm-3 col-form-label">Tempat Lahir :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="tempatlahir" placeholder="Masukan Tempat Lahir Calon Pemilik" name="tempatlahir" value="<?= $pendaftar['tempatlahir']; ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                    <div class="col-sm-3">Foto KTP : </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3">
                            <?php
                                if ($pendaftar['fotoktp'] != null) { ?>
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('uploads/foto/ktp/') . $pendaftar['fotoktp']; ?>" alt="Foto KK">
                                <?php
                                }else{
                                    ?>
                                    <i>*Tidak Ada Data</i><br>
                                <?php
                                } ?>
                            </div>
                                <input type="hidden" name="fotoktp" class="form-control" id="fotoktp" for="fotoktp" value="<?= $pendaftar['fotoktp']; ?>">   
                            <div class="col-sm-9">       
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
                                if ($pendaftar['fotokk'] != null) { ?>
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('uploads/foto/kk/') . $pendaftar['fotokk']; ?>" alt="Foto KK">
                                <?php
                                }else{
                                    ?>
                                    <i>*Tidak Ada Data</i><br>
                                <?php
                                } ?>                               
                            </div>
                            <div class="col-sm-9">
                                <input type="hidden" name="fotokk" class="form-control" id="fotokk" for="fotokk" value="<?= $pendaftar['fotokk']; ?>">         
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
                                <img src="<?= base_url('uploads/foto/profil/'). $pendaftar['fotoprofil']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <input type="hidden" name="fotoprofil" class="form-control" id="fotoprofil" for="fotoprofil" value="<?= $pendaftar['fotoprofil']; ?>">
                            </div>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status :</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="status" name="status">
                            <?php foreach($status as $status) :?>
                                <?php if($status == $pendaftar['status']) :?>
                                <option value="<?php echo $status; ?>" selected><?php echo $status; ?></option>
                                    <?php else : ?>
                                        <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
                                    <?php endif;?>
                            <?php endforeach; ?>
                        </select>
                        <small class="form-text text-danger"><?php echo form_error('status'); ?></small>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
                        <a href="<?php echo base_url('pendaftar'); ?>">      
                            <button type="button" class="btn btn-secondary">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-info"><i class="fas fa-edit" title="Lanjutkan"></i> Lanjutkan</button>
                        <a href="<?= base_url(); ?>pendaftar/hapus/<?= $pendaftar['id']?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash" title="Hapus"></i> Hapus</a>
                    </div>
                </div>
           </form>
        </div>
    </div>
</div>
</div>
</div>