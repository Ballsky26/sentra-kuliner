<div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url(); ?>wawancara">Wawancara</a></li>
        <li class="breadcrumb-item active" aria-current="page">Validasi Pendaftar</li>
      </ol>
    </nav>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Validasi Pendaftar <?= $pendaftar['nama']; ?></h6>
      </div>
        <div class="card-body">
    <div class="row">
        <div class="col-lg-8">
    <form method="post" action="<?php base_url('wawancara/validasi'); ?>" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $pendaftar['id']; ?>">
                  <input type="hidden" class="form-control" id="email" placeholder="Email" name="email" value="<?= $pendaftar['email']; ?>" readonly>
                  <input type="hidden" class="form-control" id="nik" placeholder="nik" name="nik" value="<?= $pendaftar['nik']; ?>" readonly>
                  <input type="hidden" class="form-control" id="password" placeholder="password" name="password" value="<?= $pendaftar['password']; ?>" readonly>
                  <input type="hidden" class="form-control" id="nama" placeholder="nama" name="nama" value="<?= $pendaftar['nama']; ?>" readonly>
                  <input type="hidden" class="form-control" id="npwp" placeholder="npwp" name="npwp" value="<?= $pendaftar['npwp']; ?>" readonly>
                  <input type="hidden" class="form-control" id="alamat" placeholder="alamat" name="alamat" value="<?= $pendaftar['alamat']; ?>" readonly>
                  <input type="hidden" class="form-control" id="telpon" placeholder="telpon" name="telpon" value="<?= $pendaftar['telpon']; ?>" readonly>
                  <input type="hidden" class="form-control" id="tgl_lahir" placeholder="tgl_lahir" name="tgl_lahir" value="<?= $pendaftar['tgllahir']; ?>" readonly>
                  <input type="hidden" class="form-control" id="tempatlahir" placeholder="tempatlahir" name="tempatlahir" value="<?= $pendaftar['tempatlahir']; ?>" readonly>
                  <input type="hidden" name="fotoktp" class="form-control" id="fotoktp" for="fotoktp" value="<?= $pendaftar['fotoktp']; ?>">   
                  <input type="hidden" name="fotokk" class="form-control" id="fotokk" for="fotokk" value="<?= $pendaftar['fotokk']; ?>">
                <input type="hidden" name="foto" class="form-control" id="foto" for="foto" value="<?= $pendaftar['fotoprofil']; ?>">       
                <div class="form-group row">
                    <label for="slogan" class="col-sm-3 col-form-label">Slogan :</label>
                    <div class="col-sm-9">
                    <input type="text" name="slogan" class="form-control" value="<?= set_value('slogan'); ?>" id="slogan" placeholder="Masukan Slogan Pemilik">
                </div>
                </div>
                <div class="form-group row">
                    <label for="namakios" class="col-sm-3 col-form-label">Nama Kios :</label>
                    <div class="col-sm-9">
                    <input type="text" name="namakios" class="form-control" value="<?= set_value('namakios'); ?>" id="namakios" placeholder="Masukan Nama Kios Pemilik">
                    <small class="form-text text-danger"><?= form_error('namakios'); ?></small>
                </div>
                </div>
                <div class="form-group row">
                    <label for="nokios" class="col-sm-3 col-form-label">No Kios :</label>
                    <div class="col-sm-9">
                    <select class="js-example-responsive" id="nokios" name="nokios" value="<?= set_value('nokios'); ?>" style="width: 25%">
                        <option value="">--Pilih--</option>
                        <?php foreach($kios as $kios): ?>
                            <option value="<?= $kios->nokios; ?>"><?= $kios->nokios; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="form-text text-danger"><?= form_error('nokios'); ?></small>
                </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
                        <a href="<?= base_url('wawancara'); ?>">      
                            <button type="button" class="btn btn-secondary">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-success"><i class="fas fa-check-circle" title="Validasi"></i> Validasi</button>
                        <a href="<?= base_url(); ?>wawancara/hapus/<?= $pendaftar['id']?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash" title="Hapus"></i> Hapus</a>
                    </div>
                </div>
           </form>
        </div>
    </div>
</div>
</div>
</div>
