<section class="hero d-flex align-items-center">
	<div class="container">
		<div class="card">
			<div class="card-body">
				<h3 class="text-center"><?= $berita['judul'];?></h3>
				<img src="<?php echo base_url('uploads/foto/berita/') . $berita['gambar']; ?>" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
				<span class="badge badge-danger" style="color:black"><?= date('d F Y H:i:s', $berita['tglterbit']); ?></span>
				-
				<span class="badge badge-success" style="color:black"><?= $berita['kategori'];?></span>
					 <?= $berita['isiberita'];?>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-6">
				<a href="<?= base_url(); ?>home" class="btn btn-primary">Kembali</a>
			</div>
		</div>
	</div>
</section>