<script src="<?= base_url('assets/vendor/ckeditor/ckeditor.js'); ?>"></script>

<div class="container-fluid">
	<section class="content-header">
		<h1><i class="fas fa-newspaper"></i> Edit Berita</h1>
	</section>
	<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>berita">Berita</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Berita</li>
      </ol>
    </nav>
	<div class="card shadow mb-4">
		<div class="card-header py-3">
        	<h6 class="m-0 font-weight-bold text-primary">Form Edit Berita</h6>
      	</div>
		<div class="card">
		  <div class="card-body">
	<form method="post" action="<?php base_url('berita/edit'); ?>" enctype="multipart/form-data">
				<div class="form-group">
					<label for="judul">Judul :</label>
					<input type="text" name="judul" class="form-control" value="<?php echo $berita['judul']; ?>" id="judul" placeholder="Masukan judul">
					<small class="form-text text-danger"><?php echo form_error('judul'); ?></small>
				</div>
				<div class="form-group">
					<label for="kategori">Kategori :</label>
					<select class="form-control" id="kategori" name="kategori">
						<?php foreach($kategori as $kategori) :?>
							<?php if($kategori == $berita['kategori']) :?>
							<option value="<?php echo $kategori; ?>" selected><?php echo $kategori; ?></option>
								<?php else : ?>
									<option value="<?php echo $kategori; ?>"><?php echo $kategori; ?></option>
								<?php endif;?>
						<?php endforeach; ?>
					</select>
					<small class="form-text text-danger"><?php echo form_error('nokios'); ?></small>
				</div>
				<div class="form-group row">
					<div class="col-sm-1">Gambar: </div>
					<div class="col-sm-10">
						<div class="row">
							<div class="col-sm-3">
								<img src="<?php echo base_url('uploads/foto/berita/') . $berita['gambar']; ?>" class="img-thumbnail">
								<p>Gambar Saat Ini : <?php echo $berita['gambar']; ?></p>
							</div>
							<div class="col-sm-9">
								<input type="file" name="gambar" class="dropify" id="gambar" for="gambar" value="<?php echo $berita['gambar']; ?>">			
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="isiberita">Isi Berita :</label>
					<textarea type="text" name="isiberita" class="form-control" value="<?php echo $berita['isiberita']; ?>" id="isiberita" placeholder="Masukan Isi Berita"><?php echo $berita['isiberita']; ?></textarea>
					<small class="form-text text-danger"><?php echo form_error('isiberita'); ?></small>
				</div>
				<div class="modal-footer">
					<a href="<?php echo base_url('/berita'); ?>">
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
	CKEDITOR.replace('isiberita');
</script>