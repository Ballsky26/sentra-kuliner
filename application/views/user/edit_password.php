<div class="container">
    <h1>Edit Password</h1>
      <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Form Edit Password</h6>
      </div>
        <div class="card-body">
        <div class="col-lg-8">
        	 <?= $this->session->flashdata('flash');?>
            <form action="<?= base_url('user/dashboard/edit_password'); ?>" method="post">
              <div class="form-group row">
                <label for="current_password" class="col-sm-3 col-form-label">Password Lama :</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="current_password" placeholder="Masukan Password Lama Anda" name="current_password" value="">
                  <?php echo form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
					<label for="new_password1" class="col-sm-3 col-form-label">Password Baru :</label>
                    	<div class="col-sm-5 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" id="new_password1" name="new_password1" placeholder="Password Baru" value="">
                            <?php echo form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-4">
                            <input type="password" class="form-control form-control-user" id="new_password2" name="new_password2" placeholder="Ulangi Password Baru">
                            <?php echo form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
                        <a href="<?php echo base_url('dashboard'); ?>">      
                            <button type="button" class="btn btn-secondary">Kembali</button>
                        </a>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Ubah Password</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>