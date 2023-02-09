<div id="flash" data-flash="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="container">
    <h1>Cetak Laporan Pendapatan Bulanan Pemilik Kios</h1>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Laporan Bulanan</h6>
      </div>
        <div class="card-body">
    <div class="row">
        <div class="col-lg-8">
            <?php echo form_open_multipart('pemilikkios/dashboard/laporan'); ?>
                  <input type="hidden" class="form-control" id="email" placeholder="email" name="email" value="<?= $user['email']; ?>" readonly>
              <div class="form-group row">
                <div class="col-sm-9">
                  <input type="hidden" class="form-control" id="tahun" placeholder="tahun" name="tahun" value="">
                </div>
              </div>
              <div class="form-group row">
                <label for="pendapatan" class="col-sm-3 col-form-label">Pendapatan Bulan Ini :</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="pendapatan" placeholder="Masukan Pendapatan Bulanan" name="pendapatan" value="<?= $user['pendapatan']; ?>">
                  <small class="form-text text-danger"><?php echo form_error('pendapatan'); ?></small>
                  <p>Terakhir Update: <?= date('d F Y H:i', $user['tahun']); ?></p>           
                </div>
              </div>
              <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
                        <p>*<i>Isi Pendapatan Bulan ini Terlebih Dahulu Kemudian Klik Cetak.</i></p>
                        <a href="<?php echo base_url('pemilikkios/dashboard'); ?>">      
                            <button type="button" class="btn btn-secondary">Batal</button>
                        </a>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-clipboard fa-sm"></i> Cetak</button>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
</div>
</div>