
<style>
    .chat-header {
        font-family: "Mada", sans-serif;
        font-size: 14px;
        color: #686c71;
        font-weight: 400;
        position: relative;
    }
    .btn {
        border-radius: 0.25rem;
        font-size: 14px;
        margin-bottom: 5px;
        margin-right: 10px;
        transition: all 0.3s ease-in-out;
    }
    .btn-icon,
    .drp-icon {
        width: 40px;
        height: 40px;
        padding: 10px 12px;
        border-radius: 50%;
    }

    .csa {
        max-height: 100px;
        min-width: 100px;
        min-height: 100px;
        max-width: 100px;

    }
    .widget-profile-card-3 {
    background-image: url("<?php echo base_url('uploads/foto/profil/') . $user['fotoprofil']; ?>");
    background-size: cover;
    padding: 50px 0;
    text-align: center;
	}
    .card {
      box-shadow: 0 6px 10px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
    }

</style>
<div id="flash" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="container">
<div class="row">
	<div class="col-md-12 col-xl-4">
	        <div class="card">
	            <div class="widget-profile-card-3">
	                <img class="img-fluid img-thumbnail csa rounded-circle" src="<?php echo base_url('uploads/foto/profil/') . $user['fotoprofil']; ?>" alt="Profile-user">
	            </div>
	            <div class="card-body text-center">
	                <h3><?= $user['nama'];?></h3>
	                <p>Status Pengajuan : <?php if ($user['status'] == 'proses') { ?>
                     <a class="badge badge-primary"><?= $user['status'] ?></a>
                   <?php
                   }elseif($user['status'] == 'Pengajuan Ditolak'){ ?>
                       <a class="badge badge-danger"><?= $user['status'] ?></a>
                   <?php
                   }elseif ($user['status'] == 'Pengajuan Diterima') {?>
                     <a class="badge badge-success"><?= $user['status'] ?></a>
                     <?php
                   }?></p>          
	            </div>
                
	            <div class="card-footer bg-inverse">
	                <div class="row text-center">
	                    <div class="col">
                            <span>Foto KTP :</span>
                            <?php
                                if ($user['fotoktp'] != null) { ?>
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('uploads/foto/ktp/') . $user['fotoktp']; ?>" alt="Foto KK">
                                <?php
                                }else{
                                    ?>
                                    <i style="color: red;">*</i> <i>Tidak Ada Data</i><br>
                                <?php
                                } ?>
	                    </div>
	                    <div class="col">
                            <span>Foto KK :</span>
                            <?php
                                if ($user['fotokk'] != null) { ?>
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('uploads/foto/kk/') . $user['fotokk']; ?>" alt="Foto KK">
                                <?php
                                }else{
                                    ?>
                                    <i style="color: red;">*</i> <i>Tidak Ada Data</i><br>
                                <?php
                                } ?>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
        <div>
            
        </div>
	    <div class="col-sm-8">
        <div class="card mt-1" style="height:425px;">
            <div class="card-header">
                <h5>Detail Informasi <?= $user['nama'];?></h5>
            </div>
            <div class="card-body">
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-danger btn-icon" role="button"><i class="fas fa-id-card"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">NIK</div>
                        <p class="chat-header text-muted"><?= $user['nik'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-info btn-icon" role="button"><i class="fas fa-tag"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">Alamat</div>
                        <p class="chat-header text-muted"><?= $user['alamat'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-warning btn-icon" role="button"><i class="fas fa-birthday-cake"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">Tanggal Lahir</div>
                        <p class="chat-header text-muted"><?= $user['tgllahir'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-primary btn-icon" role="button"><i class="fas fa-at"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">Email</div>
                        <p class="chat-header text-muted"><?= $user['email'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-secondary btn-icon" role="button"><i class="fas fa-scroll"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">NPWP</div>
                        <p class="chat-header text-muted"><?= $user['npwp'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-success btn-icon" role="button"><i class="fas fa-mobile-alt"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">No Telepon</div>
                        <p class="chat-header text-muted"><?= $user['telpon'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="card mt-3">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Catatan</h6>
      </div>
        <div class="card-body">
            <div class="pl-2">
             <p>Mohon Lengkapi Data Anda Apabila Belum Lengkap</p>
             <p>Keterangan :</p>
             <span class="badge badge-primary">proses </span><a> : Mohon Menunggu 1-2 Hari Kerja, Karena Staff Sedang Memproses Pendaftaran.</p>
             <span class="badge badge-danger">Pengajuan Ditolak </span><a> : Apabila Ditolak Mohon Memperbaiki Data Yang Sudah Anda Isi, atau Pendaftaran Penuh.</a><div></div>
             <span class="badge badge-success">Pengajuan Diterima </span><a> : Silahkan Datang ke Technopark Perikanan Kota Pekalongan Secepatnya Untuk Diwawancarai.</a>
            </div>
        </div>
    </div>
</div>
