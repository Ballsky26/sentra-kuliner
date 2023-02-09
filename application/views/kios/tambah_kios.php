<div class="container-fluid">
	<div class="">
		<section class="content-header">
			<h1><i class="fas fa-store"></i> Tambah Kios</h1>
		</section>
	</div>
	<div class="card shadow mb-4">
		<div class="card-header py-3">
        	<h6 class="m-0 font-weight-bold text-primary">Form Tambah Kios</h6>
      	</div>
		<div class="card">
		  <div class="card-body">
		    <?= form_open_multipart('kios/tambah_data'); ?>
				<div class="form-group row">
	                <label for="nokios" class="col-sm-3 col-form-label">No Kios :</label>
	                <div class="col-sm-9">
	                  <input type="number" class="form-control" id="nokios" placeholder="Masukan Nomor Kios" name="nokios" value="<?= set_value('nokios'); ?>" min="1">
	                  <small class="form-text text-danger"><?= form_error('nokios'); ?></small>
	                </div>
	              </div>
				<div class="modal-footer">
					<a href="<?= base_url('kios'); ?>">
	            		<button type="button" class="btn btn-secondary">Kembali</button>
	            	</a>
	            <button type="submit" class="btn btn-primary"><i class="fas fa-user-plus"></i> Tambah</button>
	          </div>
			<?= form_close(); ?>
		  </div>
		</div>
	</div>

</div>