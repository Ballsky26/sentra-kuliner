    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <img src="<?= base_url()?>assets/img/forgot.png" class="col-lg-6 d-none d-lg-block">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="<?= base_url()?>assets/img/logo.png" style="width:70px;height:90px;">
                                        <h1 class="h4 text-gray-900 mb-2 mt-2">Lupa Password Anda?</h1>
                                        <p class="mb-4">Silahkan Masukan Email Anda, dan Kami Akan Mengirimkan Link Untuk Me-reset Password Anda.</p>
                                    </div>
                                    <?= $this->session->flashdata('flash');?>
                                     <form class="user" method="post" action="<?= base_url('pemilikkios/login/forgotpassword');?>">
                                         <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email"
                                                placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                            <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block mt-3">
                                           <i class="fas fa-key"></i> Reset Password
                                        </button>
                                        <hr>
                                        <div class="text-center mt-3">
                                            <a class="small" href="<?= base_url(); ?>pemilikkios/login">Login</a>
                                        </div>
                                    </form>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
