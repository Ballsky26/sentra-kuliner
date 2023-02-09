<div class="container-fluid">
		<section class="content-header">
			<h1><i class="fas fa-user-plus"></i> Tambah Staff</h1>
		</section>
		 <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>superadmin/staff">Staff</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Staff</li>
          </ol>
        </nav>
	<div class="card shadow mb-4">
		<div class="card-header py-3">
        	<h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Staff</h6>
      	</div>
		<div class="card">
		  <div class="card-body">
		    <?= form_open_multipart('superadmin/staff/tambah_data'); ?>
				<div class="form-group row">
	        <label for="nik" class="col-sm-3 col-form-label">Nomor Induk Kependudukan :</label>
	        <div class="col-sm-9">
	        <input type="text" class="form-control" id="nik" placeholder="Masukan NIK" name="nik" value="<?= set_value('nik'); ?>">
	        	<small class="form-text text-danger"><?= form_error('nik'); ?></small>
	        </div>
	      </div>
	      <div class="form-group row">
	        <label for="role_id" class="col-sm-3 col-form-label">Role :</label>
	        <div class="col-sm-9">
					<select class="form-control" id="role_id" name="role_id" value="<?= set_value('role_id'); ?>">
						<option value="">--Pilih--</option>
						<option value="1">Administrator</option>
						<option value="3">Ketua</option>
					</select>
					<small class="form-text text-danger"><?php echo form_error('role_id'); ?></small>
	        </div>
	      </div>
				<div class="form-group row">
					<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap :</label>
					<div class="col-sm-9">
					<input type="text" name="nama" class="form-control" value="<?= set_value('nama'); ?>" id="nama" placeholder="Masukan Nama Staff">
					<small class="form-text text-danger"><?= form_error('nama'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="telpon" class="col-sm-3 col-form-label">No Hp :</label>
					<div class="col-sm-9">
					<input type="text" name="telpon" class="form-control" value="<?= set_value('telpon'); ?>" id="telpon" placeholder="Masukan Telpon Staff">
					<small class="form-text text-danger"><?= form_error('telpon'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-3 col-form-label">Email :</label>
					<div class="col-sm-9">
					<input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>" id="email" placeholder="Masukan Email Staff">
					<small class="form-text text-danger"><?= form_error('email'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="password" class="col-sm-3 col-form-label">Password :</label>
           <div class="col-sm-5 mb-3 mb-sm-0">
           	<input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password" value="<?= set_value('password1'); ?>">
                 <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
           </div>
           <div class="col-sm-4">
            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
           </div>
        </div>
				<div class="form-group row">
					<label for="tempat_lahir"  class="col-sm-3 col-form-label">Tempat Lahir :</label>
					<div class="col-sm-9">
					<input type="text" name="tempat_lahir" class="form-control" value="<?= set_value('tempat_lahir'); ?>" id="tempat_lahir" placeholder="Masukan Tempat Lahir">
					<small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="tgl_lahir"  class="col-sm-3 col-form-label">Tanggal Lahir :</label>
					<div class="col-sm-9">
					<input type="date" name="tgl_lahir" class="form-control" value="<?= set_value('tgl_lahir'); ?>" id="tgl_lahir">
					<small class="form-text text-danger"><?= form_error('tgl_lahir'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="alamat" class="col-sm-3 col-form-label">Alamat :</label>
					<div class="col-sm-9">
					<input type="text" name="alamat" class="form-control" value="<?= set_value('alamat'); ?>" id="alamat" placeholder="Masukan Alamat Staff">
					<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
				</div>
				</div>
				<div class="form-group row">
         <div class="col-sm-3">Foto Profil : </div>
         <div class="col-sm-9">
          <div class="row">
              <div class="col-sm-9">
                  <input type="file" accept="image/*;capture=camera" name="foto" class="dropify" id="foto" for="foto" value="">    
              </div>
          </div>
         </div>
        </div>
				<div class="modal-footer">
					<a href="<?= base_url('superadmin/staff'); ?>">
	            		<button type="button" class="btn btn-secondary">Kembali</button>
	            	</a>
	            <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i> Tambah</button>
	          </div>
			<?= form_close(); ?>
		  </div>
		</div>
	</div>

</div>