<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> Edit Data Staff</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>superadmin/staff">Staff</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Staff</li>
          </ol>
        </nav>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Staff</h6>
        </div>
        <div class="card">
          <div class="card-body">
    <form method="post" action="<?php base_url('superadmin/staff/edit'); ?>" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $staff['id']; ?>">
                <div class="form-group row">
                    <label for="nik" class="col-sm-3 col-form-label">Nomor Induk Kependudukan :</label>
                    <div class="col-sm-9">
                    <input type="text" name="nik" class="form-control" value="<?= $staff['nik']; ?>" id="nik" placeholder="Masukan NIK">
                    <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                </div>
                </div>
                <div class="form-group row">
                    <label for="role_id" class="col-sm-3 col-form-label">Role :</label>
                    <div class="col-sm-9">
                    <select class="form-control" id="role_id" name="role_id">
                        <?php foreach($role_id as $role_id) :?>
                            <?php if($role_id == $staff['role_id']) :?>
                            <option value="<?= $role_id; ?>" selected><?= $role_id; ?></option>
                                <?php else : ?>
                                    <option value="<?= $role_id; ?>"><?= $role_id; ?></option>
                                <?php endif;?>
                        <?php endforeach; ?>
                    </select>
                    <small class="form-text text-danger"><?= form_error('role_id'); ?></small>
                    <i>1 : Administrator, 3 : Ketua</i>
                </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email :</label>
                    <div class="col-sm-9">
                    <input type="text" name="email" class="form-control" value="<?= $staff['email']; ?>" id="email" placeholder="Masukan Email staff">
                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap :</label>
                    <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control" value="<?= $staff['nama']; ?>" id="nama" placeholder="Masukan Nama staff">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                </div>
                <div class="form-group row">
                    <label for="telpon" class="col-sm-3 col-form-label">No Hp :</label>
                    <div class="col-sm-9">
                    <input type="text" name="telpon" class="form-control" value="<?= $staff['telpon']; ?>" id="telpon" placeholder="Masukan Telpon staff">
                    <small class="form-text text-danger"><?= form_error('telpon'); ?></small>
                </div>
                </div>
                <div class="form-group row">
                    <label for="tempat_lahir"  class="col-sm-3 col-form-label">Tempat Lahir :</label>
                    <div class="col-sm-9">
                    <input type="text" name="tempat_lahir" class="form-control" value="<?= $staff['tempat_lahir']; ?>" id="tempat_lahir" placeholder="Masukan Tempat Lahir">
                    <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir :</label>
                    <div class="col-sm-9">
                    <input type="date" name="tgl_lahir" class="form-control" value="<?= $staff['tgl_lahir']; ?>" id="tgl_lahir">
                </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat :</label>
                    <div class="col-sm-9">
                    <input type="text" name="alamat" class="form-control" value="<?= $staff['alamat']; ?>" id="alamat" placeholder="Masukan Alamat staff">
                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">Foto Profil : </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('uploads/foto/profil/') . $staff['foto']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <input type="file" accept="image/*;capture=camera" name="foto" class="dropify" id="foto" for="foto" value="">    
                            </div>
                        </div>
                        <p>Foto Profil Saat Ini : <?= $staff['foto']; ?></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?= base_url('superadmin/staff'); ?>">
                        <button type="button" class="btn btn-secondary">Kembali</button>
                    </a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
              </div>
            </form>
        </div>
    </div>
</div>
</div>