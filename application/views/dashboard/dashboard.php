<div class="container">
	<section class="content-header">
		<h1> Dashboard <small>Control panel </small> </h1>
	</section>
      <div id="flash" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
             <li class="breadcrumb-item active" aria-current="page"></li>
           </ol>
         </nav>
	<div class="row">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-3">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      	<a href="staff">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Jumlah Staff</div></a>
                              <?php $jumlah_staff = $this->model_staff->tampil_data('staff')->num_rows(); ?>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_staff; ?></div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-3">
          <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      	<a href="pemilik">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                              Jumlah Pemilik Kios</div></a>
                              <?php $jumlah_pemilik = $this->model_pemilik->tampil_data('pemilik')->num_rows(); ?>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_pemilik; ?></div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-house-user fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-3">
          <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      	<a href="pendaftar">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                              Jumlah Pendaftar</div></a>
                              <?php $jumlah_pendaftar = $this->model_pendaftar->tampil_data('pendaftar')->num_rows(); ?>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_pendaftar; ?></div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-3">
          <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      	<a href="kios">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                              Jumlah Kios</div></a>
                              <?php $jumlah_kios = $this->model_pemilik->tampil_kios('kios')->num_rows(); ?>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_kios; ?></div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-store fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>      
      <div class="col-xl-3 col-md-6 mb-3">
          <div class="card border-left-danger shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <a href="kios">
                          <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                              Kios Tersedia</div></a>
                              <?php $jumlah_kios = $this->model_pemilik->tampil_kios('kios')->num_rows() - $jumlah_pemilik;?>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_kios; ?></div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-store-alt fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>      
      <div class="col-xl-3 col-md-6 mb-3">
          <div class="card border-left-dark shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <a href="kios">
                          <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                              Berita</div></a>
                              <?php $jumlah_berita = $this->model_berita->tampil_data('berita')->num_rows(); ?>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_berita; ?></div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-3">
          <div class="card border-left-secondary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <a href="Wawancara">
                          <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                              Wawancara</div></a>
                              <?php $jumlah_wawancara = $this->model_pendaftar->tampil_wawancara('wawancara')->num_rows(); ?>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_wawancara; ?></div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
      <div class="card mb-3" style="max-width: 530px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="<?= base_url('uploads/foto/profil/') . $user['foto']; ?>" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body shadow h-100 py-2">
              <h5 class="card-title">Profile Saya</h5>
              <p class="card-text"><?= $user['nama']; ?></p>
              <p class="card-text"><small class="text-muted">Bergabung Pada : <?= date('d F Y H:i', $user['date_created']); ?></small></p>
            </div>
          </div>
        </div>
      </div>
  <!-- Content Row -->
  <?php foreach($dashboard as $dashboard) : ?>
  <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Selamat Datang di Dashboard</h6>
              </div>
              <div class="card-body">
                  <p><?php echo $dashboard->dashboard ?></p>
              </div>
              <div class="col-md-6">
                  <a href="<?= base_url(); ?>dashboard/edit/<?= $dashboard->id?>" class="btn btn-info mb-3"><i class="fas fa-edit fa-sm"></i> Edit</a>
              </div>
          </div>
      <?php endforeach; ?>
</div>