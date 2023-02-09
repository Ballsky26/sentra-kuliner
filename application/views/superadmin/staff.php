<div class="container fluid">
  <section class="content-header">
    <h1> Daftar Staff Sentra Kuliner</h1>
  </section>
  <div id="flash" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>superadmin/staff">Staff</a></li>
        <li class="breadcrumb-item active" aria-current="page"></li>
      </ol>
    </nav>
  <a href="<?php echo base_url(); ?>superadmin/staff/tambah_data" class="btn btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Staff</a>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Staff</h6>
      </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
             <thead>
                <tr>
                   <td>No.</td>
                   <td>Nama</td>
                   <td>Telpon</td>
                   <td>Alamat</td>
                   <td>Aksi</td>
                 </tr>
               </thead>
              <tbody>
                <?php 
                  $no = 1;
                foreach($staff as $staff) : ?>
                  <tr>
                   <td><?php echo $no++; ?></td>
                   <td><?php echo $staff->nama ?></td>
                   <td><?php echo $staff->telpon ?></td>
                   <td><?php echo $staff->alamat ?></td>
                   <td>
                   <a href="<?= base_url(); ?>superadmin/staff/detail_staff/<?= $staff->id?>" class="btn-circle btn-success btn-sm"><i class="fa fa-info-circle" title="Detail Staff"></i></a>
                   <?php
                    if ($staff->role_id != 3) { ?>
                   <a href="<?= base_url(); ?>superadmin/staff/edit/<?= $staff->id?>" class="btn-circle btn btn-info btn-sm"><i class="fa fa-edit" title="Edit Data Staff"></i></a>
                   <?php
                    }else{
                      ?>
                    <?php
                    } ?>
                   <a href="<?= base_url(); ?>superadmin/staff/hapus/<?= $staff->id?>" class="btn-circle btn btn-danger btn-sm tombol-hapus"><i class="fa fa-trash" title="Hapus Data Staff"></i></a>
                   </td>
                  </tr>
                <?php endforeach; ?>                                          
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>

