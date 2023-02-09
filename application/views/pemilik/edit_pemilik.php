<script src="<?= base_url('assets/vendor/ckeditor/ckeditor.js'); ?>"></script>

<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data Pemilik</h3>
	<div class="card shadow mb-4">
		<div class="card-header py-3">
        	<h6 class="m-0 font-weight-bold text-primary">Form Edit Data</h6>
      	</div>
      	<div class="card">
		  <div class="card-body">
	<form method="post" action="<?php base_url('pemilik/edit'); ?>" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $pemilik['id']; ?>">
				<div class="form-group row">
					<label for="nik" class="col-sm-3 col-form-label">Nomor Induk Kependudukan :</label>
					<div class="col-sm-9">
					<input type="text" name="nik" class="form-control" value="<?= $pemilik['nik']; ?>" id="nik" placeholder="Masukan NIK">
					<small class="form-text text-danger"><?= form_error('nik'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="nama" class="col-sm-3 col-form-label">Nama Lengkap :</label>
					<div class="col-sm-9">
					<input type="text" name="nama" class="form-control" value="<?= $pemilik['nama']; ?>" id="nama" placeholder="Masukan Nama Pemilik">
					<small class="form-text text-danger"><?= form_error('nama'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="telpon" class="col-sm-3 col-form-label">No Hp :</label>
					<div class="col-sm-9">
					<input type="number" name="telpon" class="form-control" value="<?= $pemilik['telpon']; ?>" id="telpon" placeholder="Masukan Telpon Pemilik">
					<small class="form-text text-danger"><?= form_error('telpon'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="npwp" class="col-sm-3 col-form-label">NPWP :</label>
					<div class="col-sm-9">
					<input type="text" name="npwp" class="form-control" value="<?= $pemilik['npwp']; ?>" id="npwp" placeholder="Masukan NPWP Pemilik">
					<small class="form-text text-danger"><?= form_error('npwp'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-3 col-form-label">Email :</label>
					<div class="col-sm-9">
					<input type="text" name="email" class="form-control" value="<?= $pemilik['email']; ?>" id="email" placeholder="Masukan Email Pemilik">
					<small class="form-text text-danger"><?= form_error('email'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="slogan" class="col-sm-3 col-form-label">Slogan :</label>
					<div class="col-sm-9">
					<input type="text" name="slogan" class="form-control" value="<?= $pemilik['slogan']; ?>" id="slogan" placeholder="Masukan Slogan Pemilik">
				</div>
				</div>
				<div class="form-group row">
					<label for="namakios" class="col-sm-3 col-form-label">Nama Kios :</label>
					<div class="col-sm-9">
					<input type="text" name="namakios" class="form-control" value="<?= $pemilik['namakios']; ?>" id="namakios" placeholder="Masukan Nama Kios Pemilik">
					<small class="form-text text-danger"><?= form_error('namakios'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir :</label>
					<div class="col-sm-9">
					<input type="date" name="tgl_lahir" class="form-control" value="<?= $pemilik['tgl_lahir']; ?>" id="tgl_lahir">
				</div>
				</div>
				<div class="form-group row">
					<label for="alamat" class="col-sm-3 col-form-label">Alamat :</label>
					<div class="col-sm-9">
					<input type="text" name="alamat" class="form-control" value="<?= $pemilik['alamat']; ?>" id="alamat" placeholder="Masukan Alamat Pemilik">
					<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="pendapatan" class="col-sm-3 col-form-label">Pendapatan :</label>
					<div class="col-sm-9">
					<input type="number" name="pendapatan" class="form-control" value="<?= $pemilik['pendapatan']; ?>" id="pendapatan" placeholder="Masukan pendapatan Pemilik">
					<small class="form-text text-danger"><?= form_error('pendapatan'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<label for="nokios" class="col-sm-3 col-form-label">No Kios :</label>
					<div class="col-sm-9">
                    <select class="js-example-responsive" id="nokios" name="nokios" value="<?= set_value('nokios'); ?>" style="width: 25%">
					    <?php foreach($kios as $kios):?>
					        <option value="<?= $kios['nokios']?>"
					            <?php if ($kios['nokios'] == $pemilik['nokios']) : ?> selected<?php endif; ?>>
					            <?= $kios['nokios']?>
					        </option>
					    <?php endforeach; ?>
                    </select>
					<small class="form-text text-danger"><?= form_error('nokios'); ?></small>
				</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-3">Foto KTP : </div>
					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-3">
								<img src="<?= base_url('uploads/foto/ktp/') . $pemilik['fotoktp']; ?>" class="img-thumbnail">
								<p>Foto KTP Saat Ini : <?= $pemilik['fotoktp']; ?></p>
							</div>
							<div class="col-sm-9">
								<input type="file" accept="image/*;capture=camera" name="fotoktp" class="dropify" id="fotoktp" for="fotoktp" value="">
								<small class="form-text text-danger"><?= form_error('fotoktp'); ?></small>			
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-3">Foto KK : </div>
					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-3">
                            <?php
                                if ($pemilik['fotokk'] != null) { ?>
                                    <img class="img-fluid img-thumbnail" src="<?= base_url('uploads/foto/kk/') . $pemilik['fotokk']; ?>" alt="Foto KK">
									<p>Foto Profil Saat Ini : <?= $pemilik['fotokk']; ?></p>
                                <?php
                                }else{
                                    ?>
                                    <i>*Tidak Ada Data</i><br>
                                <?php
                                } ?>
							</div>
							<div class="col-sm-9">
								<input type="file" accept="image/*;capture=camera" name="fotokk" class="dropify" id="fotokk" for="fotokk" value="">
								<small class="form-text text-danger"><?= form_error('fotokk'); ?></small>			
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-3">Foto Profil : </div>
					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-3">
								<img src="<?= base_url('uploads/foto/profil/') . $pemilik['foto']; ?>" class="img-thumbnail">
								<p>Foto Profil Saat Ini : <?= $pemilik['foto']; ?></p>
							</div>
							<div class="col-sm-9">
								<input type="file" accept="image/*;capture=camera" name="foto" class="dropify" id="foto" for="foto" value="">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-3">Foto Keterangan : </div>
					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-3">
                            <?php
                                if ($pemilik['fotoketerangan'] != null) { ?>
                                    <img class="img-fluid img-thumbnail" src="<?= base_url('uploads/foto/fotoketerangan/') . $pemilik['fotoketerangan']; ?>" alt="Foto KK">
									<p>Foto Profil Saat Ini : <?= $pemilik['fotoketerangan']; ?></p>
                                <?php
                                }else{
                                    ?>
                                    <i>*Tidak Ada Data</i><br>
                                <?php
                                } ?>
							</div>
							<div class="col-sm-9">
								<input type="file" accept="image/*;capture=camera" name="fotoketerangan" class="dropify" id="fotoketerangan" for="fotoketerangan" value="">
								<small class="form-text text-danger"><?= form_error('fotoketerangan'); ?></small>			
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="keterangan" class="col-sm-3 col-form-label">Keterangan :</label>
					<div class="col-sm-9">
                    <textarea type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukan Isi user"><?php echo $pemilik['keterangan']; ?></textarea>
					<small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
				</div>
				</div>
				<div class="modal-footer">
					<a href="<?= base_url('/Pemilik'); ?>">
	            		<button type="button" class="btn btn-secondary">Kembali</button>
	            	</a>
	            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
	          </div>
			</form>
		</div>
	</div>
</div>
</div>
<script>
    CKEDITOR.replace('keterangan');
</script>