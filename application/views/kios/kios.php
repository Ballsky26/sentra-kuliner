<div class="container fluid">
  <section class="content-header">
    <h1> Daftar Kios</h1>
  </section>
  <div id="flash" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>kios">Kios</a></li>
            <li class="breadcrumb-item active" aria-current="page"></li>
          </ol>
        </nav>

  <a href="<?= base_url(); ?>kios/tambah_data" class="btn btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data Kios</a>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Kios Sentra Kuliner</h6>
      </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
             <thead>
                <tr>
                   <td>Kios</td>
                   <td>Aksi</td>
                 </tr>
               </thead>
              <tbody>
                <?php 
                  $no = 1;
                foreach($kios as $kios) : ?>
                  <tr>
                   <td><?= $kios->nokios ?></td>
                   <td>
                   <a href="<?= base_url(); ?>kios/edit/<?= $kios->id?>" class="btn-circle btn-warning btn-sm"><i class="fa fa-edit" title="Edit"></i></a>
                   <a href="<?= base_url(); ?>kios/hapus/<?= $kios->id?>" class="btn-circle btn-danger btn-sm tombol-hapus"><i class="fa fa-trash" title="Hapus"></i></a>
                   </td>
                  </tr>
                <?php endforeach; ?>                                          
              </tbody>
            </table>
          </div>
        </div>
      </div>
</div>