<div class="container fluid">
  <section class="content-header">
    <h1> Daftar Pemilik Kios</h1>
  </section>
  <div id="flash" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
   <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>pemilik">Pemilik</a></li>
       <li class="breadcrumb-item active" aria-current="page"></li>
     </ol>
   </nav>
  <a href="<?php echo base_url(); ?>pemilik/tambah_data" class="btn btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Pemilik</a>
  <!-- <a href="<?php echo base_url(); ?>pemilik/excel" class="btn btn-info mb-3"><i class="fas fa-clipboard fa-sm"></i> Excel</a> -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pemilik Kios Sentra Kuliner</h6>
      </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
             <thead>
                <tr>
                   <td>No.</td>
                   <td>Nama</td>
                   <td>Slogan</td>
                   <td>Nama Kios</td>
                   <td>No Kios</td>
                   <td>Aksi</td>
                 </tr>
               </thead>
              <tbody>
                <?php 
                  $no = 1;
                foreach($pemilik as $pemilik) : ?>
                  <tr>
                   <td><?php echo $no++; ?></td>
                   <td><?php echo $pemilik->nama ?></td>
                   <td><?php echo $pemilik->slogan ?></td>
                   <td><?php echo $pemilik->namakios ?></td>
                   <td><?php echo $pemilik->nokios ?></td>
                   <td>
                   <a href="<?= base_url(); ?>pemilik/detail_pemilik/<?= $pemilik->id?>" class="btn-circle btn-success btn-sm"><i class="fa fa-info-circle" title="Detail"></i></a>
                   <a href="<?= base_url(); ?>pemilik/edit/<?= $pemilik->id?>" class="btn-circle btn-primary btn-sm"><i class="fa fa-edit" title="Edit Data"></i></a>
                   <a href="<?= base_url(); ?>pemilik/hapus/<?= $pemilik->id?>" class="btn-circle btn-danger btn-sm tombol-hapus"><i class="fa fa-trash" title="Hapus"></i></a>
                   </td>
                  </tr>
                <?php endforeach; ?>                                          
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>



<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Detail Pemilik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        foto : <?php echo $pemilik->foto; ?><br>
        NIK : <?php echo $pemilik->nik; ?><br>
        Nama : <?php echo $pemilik->nama; ?><br>
        Telpon : <?php echo $pemilik->telpon; ?><br>
        Slogan : <?php echo $pemilik->slogan; ?><br>
        Nama Kios : <?php echo $pemilik->namakios; ?><br>
        Tanggal lahir : <?php echo $pemilik->tgl_lahir; ?><br>
        Alamat : <?php echo $pemilik->alamat; ?><br>
        No Kios : <?php echo $pemilik->nokios; ?><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>