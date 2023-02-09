<div class="container">
  <section class="content-header">
    <h1>Daftar Pesan Masuk</h1>
  </section>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>pesan">Pesan</a></li>
      <li class="breadcrumb-item active" aria-current="page"></li>
    </ol>
  </nav>
  <div id="flash" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="card shadow">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pesan dan Kritik Saran</h6>
      </div>
    <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTablecs" width="100%" cellspacing="0">
             <thead>
                <tr>
                   <td>No.</td>
                   <td>Email</td>
                   <td>Nama</td>
                   <td>Subjek</td>
                   <td>Aksi</td>
                 </tr>
               </thead>
              <tbody>
                 <?php
                  $no=1;
                    foreach($pesan as $pesan) : ?>
                      <tr class="text-center">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $pesan->email ?></td>
                        <td><?php echo $pesan->nama ?></td>
                        <td><?php echo $pesan->subjek ?></td>
                        <td><a href="<?= base_url(); ?>pesan/detail_pesan/<?= $pesan->id?>" class="btn-circle btn-success btn-sm"><i class="fa fa-info-circle" title="Info Pesan"></i></a>
                        <a href="<?= base_url(); ?>pesan/hapus/<?= $pesan->id?>" class="btn-circle btn-danger btn-sm tombol-hapus"><i class="fa fa-trash" title="Hapus"></i></a></td>
                      </tr>
                      <?php endforeach; ?>                                         
                          </tbody>
            </table>
          </div>
        </div>
  </div>
  </div>

