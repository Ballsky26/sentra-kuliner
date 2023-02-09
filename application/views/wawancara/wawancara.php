<div class="container fluid">
  <section class="content-header">
    <h1> Sesi Wawancara</h1>
  </section>
  <div id="flash" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
  <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>wawancara">Wawancara</a></li>
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
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Wawancara Pendaftar Calon Pemilik Kios</h6>
      </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
             <thead>
                <tr>
                   <td>No.</td>
                   <td>Nama</td>
                   <td>Alamat</td>
                   <td>Email</td>
                   <td>Telpon</td>
                   <td>Aksi</td>
                 </tr>
               </thead>
              <tbody>
                <?php 
                  $no = 1;
                foreach($wawancara as $wawancara) : ?>
                  <tr>
                   <td><?= $no++; ?></td>
                   <td><?= $wawancara->nama ?></td>
                   <td><?= $wawancara->alamat ?></td>
                   <td><?= $wawancara->email ?></td>
                   <td><?= $wawancara->telpon ?></td>
                   <td>
                   <a href="<?= base_url(); ?>wawancara/validasi/<?= $wawancara->id?>" class="btn-circle btn-success btn-sm"><i class="fas fa-user-plus" title="Validasi"></i></a>
                   <a href="<?= base_url(); ?>wawancara/hapus/<?= $wawancara->id?>" class="btn-circle btn-danger btn-sm tombol-hapus"><i class="fa fa-trash" title="Hapus"></i></a>
                   </td>
                  </tr>
                <?php endforeach; ?>                                          
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>