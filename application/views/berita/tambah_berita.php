<script src="<?= base_url('assets/vendor/ckeditor/ckeditor.js'); ?>"></script>

<div class="container-fluid">
	<div class="">
		<section class="content-header">
			<h1><i class="fas fa-newspaper"></i> Tambah Berita</h1>
		</section>
	</div>
		<div class="card">
		  <div class="card-body">
		    <?php echo form_open_multipart('berita/tambah_data'); ?>
				<div class="form-group">
					<label for="judul">Judul :</label>
					<input type="text" name="judul" class="form-control" value="<?= set_value('judul'); ?>" id="judul" placeholder="Masukan Judul Berita">
					<small class="form-text text-danger"><?php echo form_error('judul'); ?></small>
				</div>
				<div class="form-group">
					<label for="kategori">Kategori :</label>
					<select class="form-control" id="kategori" name="kategori" value="<?= set_value('kategori'); ?>">
						<option>--Pilih--</option>
						<option value="Pengumuman">Pengumuman</option>
						<option value="Berita">Berita</option>
					</select>
					<small class="form-text text-danger"><?php echo form_error('kategori'); ?></small>
				</div>
				<div class="form-group">
					<label for="gambar">Gambar :</label>
					<input type="file" accept="image/*;capture=camera" name="gambar" class="dropify" value="" id="gambar">
				</div>
				<div class="form-group">
					<label for="isiberita">Isi Berita :</label>
					<textarea type="text" name="isiberita" class="form-control" value="<?= set_value('isiberita'); ?>" id="isiberita" placeholder="Masukan Isi Berita"></textarea>
					<small class="form-text text-danger"><?php echo form_error('isiberita'); ?></small>
				</div>
				<div class="modal-footer">
					<a href="<?php echo base_url('/berita'); ?>">
	            		<button type="button" class="btn btn-secondary">Kembali</button>
	            	</a>
	            <button type="submit" class="btn btn-primary"><i class="fas fa-newspaper"></i> Tambah</button>
	          </div>
			</form>
		  </div>
		</div>

</div>

<script>
	CKEDITOR.replace('isiberita');
</script>