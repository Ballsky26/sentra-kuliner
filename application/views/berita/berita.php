<div class="container fluid">
  <section class="content-header">
    <h1> Daftar Berita</h1>
  </section>
  <div id="flash" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>berita">Berita</a></li>
      <li class="breadcrumb-item active" aria-current="page"></li>
    </ol>
  </nav>
  <?php if( $this->session->flashdata('flash')) : ?>
    <!--<div>
      <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        Data Telah <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>.
      </div>
    </div> -->

  <?php endif; ?>
  <a href="<?php echo base_url(); ?>berita/tambah_data" class="btn btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Berita</a>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Berita</h6>
      </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTablecs" width="100%" cellspacing="0">
             <thead>
                <tr>
                   <td>No.</td>
                   <td>Judul</td>
                   <td>Kategori</td>
                   <td>Tanggal Terbit</td>
                   <td>Gambar</td>
                   <td>Aksi</td>
                 </tr>
               </thead>
              <tbody>
                <?php 
                  $no = 1;
                foreach($berita as $berita) : ?>
                  <tr>
                   <td><?php echo $no++; ?></td>
                   <td><?php echo $berita->judul ?></td>
                   <td><?php echo $berita->kategori ?></td>
                   <td><?= date('d M Y H:i:s', $berita->tglterbit); ?></td>
                   <td><img src="<?= base_url() . '/uploads/foto/berita/' . $berita->gambar ?>" width="80"></td>
                   <td>
                   <a href="<?= base_url(); ?>berita/detail_berita/<?= $berita->id?>" class="btn-circle btn-success btn-sm"><i class="fa fa-info-circle" title="Detail"></i></a>
                   <a href="<?= base_url(); ?>berita/edit/<?= $berita->id?>" class="btn-circle btn-primary btn-sm"><i class="fa fa-edit" title="Edit Data"></i></a>
                   <a href="<?= base_url(); ?>berita/hapus/<?= $berita->id?>" class="btn-circle btn-danger btn-sm tombol-hapus"><i class="fa fa-trash" title="Hapus"></i></a>
                   </td>
                  </tr>
                <?php endforeach; ?>                                          
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>