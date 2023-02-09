<div class="container-fluid">
	 <section class="content-header">
	 	<h1><i class="fas fa-user-plus"></i> Tambah Data Pemilik Kios</h1>
	 </section>
	 <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>pemilik">Pemilik</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Pemilik Kios</li>
      </ol>
     </nav>
	<div class="card shadow mb-4">
		<div class="card-header py-3">
        	<h6 class="m-0 font-weight-bold text-primary">Form Tambah Data</h6>
      	</div>
		<div class="card">
		  <div class="card-body">
		    <?php echo form_open_multipart('pemilik/tambah_data'); ?>
				<div class="form-group row">
	                <label for="nik" class="col-sm-3 col-form-label">Nomor Induk Kependudukan :</label>
	                <div class="col-sm-9">
	                  <input type="text" class="form-control" id="nik" placeholder="Masukan NIK" name="nik" value="<?= set_value('nik'); ?>">
	                  <small class="form-text text-danger"><?php echo form_error('nik'); ?></small>
	                </div>
	              </div>
				<div class="form-group row">
					<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap :</label>
					<div class="col-sm-9">
					<input type="text" name="nama" class="form-control" value="<?= set_value('nama'); ?>" id="nama" placeholder="Masukan Nama Pemilik">
					<small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="telpon" class="col-sm-3 col-form-label">No Hp :</label>
					<div class="col-sm-9">
					<input type="number" name="telpon" class="form-control" value="<?= set_value('telpon'); ?>" id="telpon" placeholder="Masukan Telpon Pemilik">
					<small class="form-text text-danger"><?php echo form_error('telpon'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="npwp" class="col-sm-3 col-form-label">NPWP</label>
					<div class="col-sm-9">
					<input type="text" name="npwp" class="form-control" value="<?= set_value('npwp'); ?>" id="npwp" placeholder="Masukan NPWP Pemilik">
					<small class="form-text text-danger"><?php echo form_error('npwp'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-3 col-form-label">Email :</label>
					<div class="col-sm-9">
					<input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>" id="email" placeholder="Masukan Email Pemilik">
					<small class="form-text text-danger"><?php echo form_error('email'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="password" class="col-sm-3 col-form-label">Password :</label>
                    	<div class="col-sm-5 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password" value="<?= set_value('password1'); ?>">
                            <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-4">
                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                        </div>
                </div>
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
					<small class="form-text text-danger"><?php echo form_error('namakios'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="tgl_lahir"  class="col-sm-3 col-form-label">Tanggal Lahir :</label>
					<div class="col-sm-9">
					<input type="date" name="tgl_lahir" class="form-control" value="<?= set_value('tgl_lahir'); ?>" id="tgl_lahir">
					<small class="form-text text-danger"><?php echo form_error('tgl_lahir'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="alamat" class="col-sm-3 col-form-label">Alamat :</label>
					<div class="col-sm-9">
					<input type="text" name="alamat" class="form-control" value="<?= set_value('alamat'); ?>" id="alamat" placeholder="Masukan Alamat Pemilik">
					<small class="form-text text-danger"><?php echo form_error('alamat'); ?></small>
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
					<small class="form-text text-danger"><?php echo form_error('nokios'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="fotoktp" class="col-sm-3 col-form-label">Foto KTP :</label>
					<div class="col-sm-9">
						<input type="file" accept="image/*;capture=camera" name="fotoktp" class="dropify" value="" id="fotoktp">
						<small class="form-text text-danger"><?php echo form_error('fotoktp'); ?></small>
					</div>
				</div>
				<div class="form-group row">
					<label for="fotokk" class="col-sm-3 col-form-label">Foto KK :</label>
					<div class="col-sm-9">
						<input type="file" accept="image/*;capture=camera" name="fotokk" class="dropify" value="" id="fotokk">
						<small class="form-text text-danger"><?php echo form_error('fotokk'); ?></small>
					</div>
				</div>
				<div class="form-group row">
					<label for="foto" class="col-sm-3 col-form-label">Foto Profil :</label>
					<div class="col-sm-9">
						<input type="file" accept="image/*;capture=camera" name="foto" class="dropify" value="" id="foto">
						<small class="form-text text-danger"><?php echo form_error('foto'); ?></small>
					</div>
				</div>
				<div class="modal-footer">
					<a href="<?php echo base_url('pemilik'); ?>">
	            		<button type="button" class="btn btn-secondary">Kembali</button>
	            	</a>
	            <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i> Tambah</button>
	          </div>
			<?php echo form_close(); ?>
		  </div>
		</div>
	</div>

</div>