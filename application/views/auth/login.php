

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

                                <h1 class="h4 text-gray-900 mt-4">Login</h1>
                                <h1 class="h4 text-gray-900 mb-4"><b>Sentra Kuliner Perikanan</b></h1>
                              </div>
                                    <?= $this->session->flashdata('message');?>
                                    <?= $this->session->flashdata('flash');?>
                                    <form class="user" method="post" action="<?= base_url('auth');?>">
                                       <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email"
                                                placeholder="Masukan Email Anda" value="<?= set_value('email'); ?>">
                                            <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password"  
                                                placeholder="Masukan Password Anda">
                                            <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block mt-3">
                                           <i class="fas fa-sign-in-alt"></i> Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center mb-2">
                                     Belum Punya Akun?
                                    </div>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url(); ?>auth/registrasi/">Daftar Akun</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url(); ?>auth/forgotpassword/">Lupa Password?</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
