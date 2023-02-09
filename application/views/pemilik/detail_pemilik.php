
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
    background-image: url("<?php echo base_url('uploads/foto/profil/') . $pemilik['foto']; ?>");
    background-size: cover;
    padding: 50px 0;
    text-align: center;
	}
    .card {
      box-shadow: 0 6px 10px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
    }

</style>
<div class="container">
    <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>pemilik">Pemilik</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Pemilik</li>
          </ol>
        </nav>
<div class="row">
	<div class="col-md-12 col-xl-4 mt-2">
	        <div class="card">
	            <div class="widget-profile-card-3">
	                <img class="img-fluid img-thumbnail csa rounded-circle" src="<?php echo base_url('uploads/foto/profil/') . $pemilik['foto']; ?>" alt="Profile-user">
	            </div>
	            <div class="card-body text-center">
	                <h3><?= $pemilik['nama'];?></h3>
	                <p><?= $pemilik['namakios'];?></p>	                
	            </div>
	            <div class="card-footer bg-inverse">
	                <div class="row text-center">
                        <div class="col">
                            <span>Foto KTP :</span>
                            <?php
                                if ($pemilik['fotoktp'] != null) { ?>
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('uploads/foto/ktp/') . $pemilik['fotoktp']; ?>" alt="Foto KTP">
                                <?php
                                }else{
                                    ?>
                                    <i>*Tidak Ada Data</i><br>
                                <?php
                                } ?>
                            <span>Slogan :</span>
                            <h4><?= $pemilik['slogan'];?></h4>
                        </div>
                        <div class="col">
                            <span>Foto KK :</span>
                            <?php
                                if ($pemilik['fotokk'] != null) { ?>
                                    <img class="img-fluid img-thumbnail" src="<?php echo base_url('uploads/foto/kk/') . $pemilik['fotokk']; ?>" alt="Foto KK">
                                <?php
                                }else{
                                    ?>
                                    <i>*Tidak Ada Data</i><br>
                                <?php
                                } ?>
                            <span>No Kios :</span>
                            <h4><?= $pemilik['nokios'];?></h4>
                        </div>
                    </div>
	            </div>
	        </div>
	    </div>
        <div>
            
        </div>
	    <div class="col-sm-8 mt-2">
        <div class="card" style="height:500px;">
            <div class="card-header">
                <h5><?= $judul ?></h5>
            </div>
            <div class="card-body">
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-danger btn-icon" role="button"><i class="fas fa-id-card"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">NIK</div>
                        <p class="chat-header text-muted"><?= $pemilik['nik'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-info btn-icon" role="button"><i class="fas fa-tag"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">Alamat</div>
                        <p class="chat-header text-muted"><?= $pemilik['alamat'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-warning btn-icon" role="button"><i class="fas fa-birthday-cake"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">Tanggal Lahir</div>
                        <p class="chat-header text-muted"><?= $pemilik['tgl_lahir'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-primary btn-icon" role="button"><i class="fas fa-at"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">Email</div>
                        <p class="chat-header text-muted"><?= $pemilik['email'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-primary btn-icon" role="button"><i class="fas fa-scroll"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">NPWP</div>
                        <p class="chat-header text-muted"><?= $pemilik['npwp'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-success btn-icon" role="button"><i class="fas fa-mobile-alt"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">No Telepon</div>
                        <p class="chat-header text-muted"><?= $pemilik['telpon'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-secondary btn-icon" role="button"><i class="fas fa-dollar-sign"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">Pendapatan Bulan Ini</div>
                        <p class="chat-header text-muted"><?= $pemilik['pendapatan'];?></p>
                        <p class="chat-header text-muted">Terakhir Update : <?= date('d F Y H:i', $pemilik['tahun']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="<?= base_url(); ?>pemilik" class="btn btn-primary mt-3">Kembali</a>
</div>