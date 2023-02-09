
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
    background-image: url("<?php echo base_url('uploads/foto/profil/') . $staff['foto']; ?>");
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
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>superadmin/staff">Staff</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail staff</li>
          </ol>
        </nav>
<div class="row">
	<div class="col-md-12 col-xl-4">
	        <div class="card">
	            <div class="widget-profile-card-3">
	                <img class="img-fluid img-thumbnail csa rounded-circle" src="<?php echo base_url('uploads/foto/profil/') . $staff['foto']; ?>" alt="Profile-user">
	            </div>
	            <div class="card-body text-center">
	                <h3><?= $staff['nama'];?></h3>
	            </div>
	            <div class="card-footer bg-inverse">
	                <div class="row text-center">
	                    <div class="col">
                            <span></span>
                            <h4></h4>
	                    </div>
	                    <div class="col">
                            <span></span>
                            <h4></h4>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
        <div>
            
        </div>
	    <div class="col-sm-8">
        <div class="card" style="height:425px;">
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
                        <p class="chat-header text-muted"><?= $staff['nik'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-info btn-icon" role="button"><i class="fas fa-tag"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">Alamat</div>
                        <p class="chat-header text-muted"><?= $staff['alamat'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-warning btn-icon" role="button"><i class="fas fa-birthday-cake"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">Tanggal Lahir</div>
                        <p class="chat-header text-muted"><?= $staff['tgl_lahir'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-primary btn-icon" role="button"><i class="fas fa-at"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">Email</div>
                        <p class="chat-header text-muted"><?= $staff['email'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-success btn-icon" role="button"><i class="fas fa-mobile-alt"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">No Telepon</div>
                        <p class="chat-header text-muted"><?= $staff['telpon'];?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-secondary btn-icon" role="button"><i class="fas fa-user"></i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">Bergabung Sejak</div>
                        <p class="chat-header text-muted"><?= date('d F Y H:i', $staff['date_created']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <a href="<?= base_url(); ?>superadmin/staff" class="btn btn-primary">Kembali</a>
</div>
