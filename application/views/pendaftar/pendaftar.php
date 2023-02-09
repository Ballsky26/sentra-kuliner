<div class="container fluid">
  <section class="content-header">
    <h1> Daftar Pendaftar</h1>
  </section>
  <div id="flash" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
  <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>pendaftar">Pendaftar</a></li>
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
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pendaftar Calon Pemilik Kios</h6>
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
                   <td>Status</td>
                   <td>Aksi</td>
                 </tr>
               </thead>
              <tbody>
                <?php 
                  $no = 1;
                foreach($pendaftar as $pendaftar) : ?>
                  <tr>
                   <td><?= $no++; ?></td>
                   <td><?= $pendaftar->nama ?></td>
                   <td><?= $pendaftar->alamat ?></td>
                   <td><?= $pendaftar->email ?></td>
                   <td><?= $pendaftar->telpon ?></td>
                   <td><?php if ($pendaftar->status == 'proses') { ?>
                     <span class="badge badge-primary"><?= $pendaftar->status ?></span>
                   <?php
                   }elseif($pendaftar->status == 'Pengajuan Ditolak'){ ?>
                       <span class="badge badge-danger"><?= $pendaftar->status ?></span>
                   <?php
                   }elseif($pendaftar->status == 'Pengajuan Diterima'){ ?>
                       <span class="badge badge-success"><?= $pendaftar->status ?></span>
                   <?php
                   }?></td>
                   <td>
                   <a href="<?= base_url(); ?>pendaftar/pengajuan/<?= $pendaftar->id?>" class="btn-circle btn-info btn-sm"><i class="fas fa-check-circle" title="Cek Pengajuan"></i></a>
                   <a href="<?= base_url(); ?>pendaftar/hapus/<?= $pendaftar->id?>" class="btn-circle btn-danger btn-sm tombol-hapus"><i class="fa fa-trash" title="Hapus"></i></a>
                   </td>
                  </tr>
                <?php endforeach; ?>                                          
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>