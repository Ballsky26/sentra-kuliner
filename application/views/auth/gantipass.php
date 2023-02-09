
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="p-5">
                              <div class="text-center">
                                <img src="<?= base_url()?>assets/img/logo.png" style="width:70px;height:90px;">

                                <h1 class="h4 text-gray-900 mt-4">Ganti Password Anda</h1>
                                <h5 class="mb-3"><?= $this->session->userdata('reset_email'); ?></h5>
                              </div>
                                    <?= $this->session->flashdata('flash');?>
                                    <form class="user" method="post" action="<?= base_url('auth/gantipassword');?>">
                                         <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password1" name="password1"
                                                placeholder="Masukan Password Baru">
                                            <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password2" name="password2"
                                                placeholder="Ulangi Password Baru">
                                            <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block mt-5">
                                           <i class="fas fa-key"></i> Reset Password
                                        </button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
