<script src="<?= base_url('assets/vendor/ckeditor/ckeditor.js'); ?>"></script>
<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Dashboard</h3>
		<nav aria-label="breadcrumb">
   	  <ol class="breadcrumb">
   	    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
   	    <li class="breadcrumb-item active" aria-current="page">Edit Dashboard</li>
   	  </ol>
   	</nav>
	<div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Edit Dashboard</h6>
      </div>
        <div class="card-body">
	<form method="post" action="">
		<input type="hidden" name="id" value="<?php echo $dashboard['id']; ?>">
				<div class="form-group">
					<label for="dashboard">Isi Dashboard :</label>
					<textarea type="text" name="dashboard" class="form-control" value="<?php echo $dashboard['dashboard']; ?>" id="dashboard" placeholder="Tambahkan Data" rows="7" cols="50"><?php echo $dashboard['dashboard']; ?></textarea>
					<small class="form-text text-danger"><?php echo form_error('dashboard'); ?></small>
				</div>
				<div class="modal-footer">
					<a href="<?php echo base_url('/Dashboard'); ?>">
	            		<button type="button" class="btn btn-secondary">Kembali</button>
	            	</a>
	            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
	          </div>
			</form>
		</div>
	</div>
</div>
<script>
	CKEDITOR.replace('dashboard');
</script>