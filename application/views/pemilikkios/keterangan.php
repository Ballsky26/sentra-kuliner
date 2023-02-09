<script src="<?= base_url('assets/vendor/ckeditor/ckeditor.js'); ?>"></script>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Halaman Home</h6>
        </div>
        <div class="card">
          <div class="card-body">
            <form method="post" action="<?php base_url('pemilikkios/dashboard/keterangan'); ?>" enctype="multipart/form-data">
           <input type="hidden" class="form-control" id="email" placeholder="Masukan Email Anda" name="email" value="<?= $user['email']; ?>" readonly>
              <div class="form-group row">
                    <div class="col-sm-3">Foto Halaman Home : </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('uploads/foto/fotoketerangan/'). $user['fotoketerangan']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <input type="file" name="fotoketerangan" class="dropify" id="fotoketerangan" for="fotoketerangan" value="">          
                            </div>
                        </div>
                        <p></p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Isi Halaman Home :</label>
                    <textarea type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukan Isi user"><?php echo $user['keterangan']; ?></textarea>
                    <small class="form-text text-danger"><?php echo form_error('keterangan'); ?></small>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url('/pemilikkios/dashboard'); ?>">
                        <button type="button" class="btn btn-secondary">Kembali</button>
                    </a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
              </div>
            </form>
        </div>
    </div>
</div>
</div>

<script>
    CKEDITOR.replace('keterangan');
</script>