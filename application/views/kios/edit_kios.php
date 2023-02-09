<div class="container-fluid">
	<div class="">
		<section class="content-header">
			<h1><i class="fas fa-store"></i> Edit Kios</h1>
		</section>
	</div>
	<div class="card shadow mb-4">
		<div class="card-header py-3">
        	<h6 class="m-0 font-weight-bold text-primary">Form Edit Kios</h6>
      	</div>
		<div class="card">
		  <div class="card-body">
			<form method="post" action="<?php base_url('kios/edit'); ?>" enctype="multipart/form-data">
				<div class="form-group row">
	                <label for="nokios" class="col-sm-3 col-form-label">Kios :</label>
	                <div class="col-sm-9">
	                <?php $jumlah_kios = $this->model_pemilik->tampil_kios('kios')->num_rows(); ?>
	                  <input type="number" class="form-control" id="nokios" placeholder="Masukan Nomor Kios" name="nokios" value="<?= $kios['nokios']; ?>" min="1" max="<?php echo $jumlah_kios; ?>">
	                  <small class="form-text text-danger"><?= form_error('nokios'); ?></small>
	                </div>
	              </div>
				<div class="modal-footer">
				 <a href="<?= base_url('kios'); ?>">
	             	<button type="button" class="btn btn-secondary">Kembali</button>
	             </a>
	            <button type="submit" class="btn btn-primary">Simpan</button>
	          </div>
			</form>
		  </div>
		</div>
	</div>
</div>