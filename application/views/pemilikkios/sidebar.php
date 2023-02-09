<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('pemilikkios/dashboard')?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pemilik Kios</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <hr class="sidebar-divider d-none d-md-block">


           <!-- query -->

            <?php
                $role_id = $this->session->userdata('role_id'); 
                $queryMenu = "SELECT `user_menu`.`id`, `menu`
                              FROM `user_menu` 
                              JOIN `user_access_menu` ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                             WHERE `user_access_menu`.`role_id` = $role_id
                             ORDER BY `user_access_menu`.`menu_id` ASC
                             ";
                $menu = $this->db->query($queryMenu)->result_array();
            ?>

            <!-- Loop -->
            <?php foreach($menu as $m) :?>
            <div class="sidebar-heading">
                <?= $m['menu']; ?>
            </div>

            <!-- sub menu -->
            <?php 
                $menuId = $m['id'];
                $querySubMenu = "SELECT *
                                  FROM `user_sub_menu`
                                  JOIN `user_menu` ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                 WHERE `user_sub_menu`.`menu_id` = $menuId
                                 ";
                $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>
                <?php foreach($subMenu as $sm) : ?>
                    <?php if ($judul == $sm['title']) : ?>
                    <li class="nav-item active">
                    <?php else : ?>
                        <li class="nav-item">
                    <?php endif ; ?>
                        <a class="nav-link" href="<?php echo base_url($sm['url']); ?>">
                            <i class="<?= $sm['icon']; ?>"></i>
                            <span><?= $sm['title']; ?></span></a>
                    </li>
                <?php endforeach; ?>
                <hr class="sidebar-divider">
            <?php endforeach; ?>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Alerts -->
                        <div class="container">
                            <script type="text/javascript">
                              <!--
                                var tanggal = new Date();
                                var kode_hari = tanggal.getDay();
                                var nama_hari = "";

                                switch(kode_hari)
                                {
                                  case 0:
                                    nama_hari="Minggu";
                                    break;
                                  case 1:
                                    nama_hari="Senin";
                                    break;
                                  case 2:
                                    nama_hari="Selasa";
                                    break;
                                  case 3:
                                    nama_hari="Rabu";
                                    break;
                                  case 4:
                                    nama_hari="Kamis";
                                    break;
                                  case 5:
                                    nama_hari="Jumat";
                                    break;
                                  case 6:
                                    nama_hari="Sabtu";
                                }
                                document.write(nama_hari);
                                document.write(", "+tanggal.getDate()+
                                        "/"+(tanggal.getMonth()+1)+
                                        "/"+tanggal.getFullYear());
                                document.write("-");
                              //-->
                              </script>
                            <div id="clock"> </div>
                        <?php
                        date_default_timezone_set("Asia/Jakarta");
                        $tz_time = date("F j, Y h:i:s");?>
                        <p id="clock"></p>
                        </div>
                        <!-- pendaftar -->

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url('uploads/foto/profil/'). $user['foto']; ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url(); ?>pemilikkios/dashboard/edit_password/">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ubah Password
                                </a>
                                <a class="dropdown-item" href="<?= base_url(); ?>pemilikkios/dashboard/edit">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile Saya
                                </a>                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-gradient-primary text-light">
                                    <h5 class="modal-title" id="exampleModalLabel">Log Out?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Klik "Logout" Dibawah jika anda ingin keluar dari Dashboard.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                    <a class="btn btn-primary" href="<?php echo base_url(); ?>auth/logout"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-1 text-gray-400"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
<script type="text/javascript">
var currenttime = '<?php echo $tz_time;?>'; // Timestamp of the timezone you want to use, in this case, it's server time
var servertime=new Date(currenttime);
function padlength(l)
    {
        var output=(l.toString().length==1)? "0"+l : l;
        return output;
    }
function digitalClock()
    {
        servertime.setSeconds(servertime.getSeconds()+1);
        var timestring=padlength(servertime.getHours())+":"+padlength(servertime.getMinutes())+":"+padlength(servertime.getSeconds());
        document.getElementById("clock").innerHTML=timestring + " CEST";
    }
window.onload=function()
    {
        setInterval("digitalClock()", 1000);
    }
</script>
<script>
    function digitalClock() {
      var d = new Date();
      var h = d.getHours();
      var m = d.getMinutes();       
      var s = d.getSeconds();   
      var hrs;
      var mins;
      var tsecs;
      var secs;
      hrs = h;
      mins = m;
      secs = s;
      var ctime = hrs + ":" + mins + ":" + secs;
      document.getElementById("clock").firstChild.nodeValue = ctime;
    }
    window.onload = function() {
      digitalClock();
      setInterval('digitalClock()', 1000);
    }
    </script>