<section class="hero d-flex align-items-center">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center"><?= $pemilik['namakios'];?></h3>
                <img src="<?php echo base_url('uploads/foto/fotoketerangan/') . $pemilik['fotoketerangan']; ?>" style="display: block; margin-left: auto; margin-right: auto; width: 50%;">
                <h5 style="color:black">Nama Pemilik: <?= $pemilik['nama']; ?></h5>
                <span class="badge badge-success" style="color:black"><?= $pemilik['slogan'];?></span>
                <span class="badge badge-info" style="color:black"><?= $pemilik['telpon'];?></span>
                     <?= $pemilik['keterangan'];?>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>home" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</section>