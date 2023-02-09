<div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="<?= base_url()?>assets/img/registrasi.png" style="width:600px;height:600px;">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="<?= base_url()?>assets/img/logo.png" style="width:70px;height:90px;">

                                <h1 class="h4 text-gray-900 mt-3">Daftar Akun Calon Pemilik Kios</h1>
                                <h1 class="h4 text-gray-900 mb-4"><b>Sentra Kuliner Perikanan Kota Pekalongan</b></h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama"  
                                        placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                                    <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email"
                                        placeholder="Alamat Email" value="<?= set_value('email'); ?>">
                                    <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password1" name="password1" placeholder="Password">
                                            <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password2" name="password2" placeholder="Ulangi Password">
                                    </div>
                                </div>
                                <button type="submit" href="login.html" class="btn btn-primary btn-user btn-block">
                                   <i class="fas fa-sign-in-alt"></i> Daftar Akun
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                Sudah Punya Akun? 
                                <div class="text-center mt-2">
                                    <a class="small" href="<?= base_url(); ?>auth">Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>