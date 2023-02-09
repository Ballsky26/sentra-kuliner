<div class="container">
	<section class="content-header">
		<h1><i class="fas fa-newspaper"></i> Detail Berita</h1>
	</section>
	<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>berita">Berita</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Berita</li>
      </ol>
    </nav>
	<div class="card">
		<div class="card-body">
			<img src="<?php echo base_url('uploads/foto/berita/') . $berita['gambar']; ?>" width="250">
			<h3><?= $berita['judul'];?></h3>
			<span class="badge badge-info"><?= date('d F Y H:i:s', $berita['tglterbit']); ?></span>
			<span class="badge badge-success"><?= $berita['kategori'];?></span>
			<p>
				<?= $berita['isiberita'];?>
			</p>
		</div>
	</div>
	<a href="<?= base_url(); ?>berita" class="btn btn-primary mb-3">Kembali</a>
</div>
