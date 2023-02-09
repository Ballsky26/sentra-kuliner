  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Sentra Kuliner Ikan</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Solusi Pintar Dalam Berbisnis Kuliner</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Mulai</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?php echo base_url() ?>templates/assets/img/sk2.jpeg" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Apa Itu Sentra Kuliner?</h3>
              <h2>Lebih Dari Sekedar Tempat Kuliner!</h2>
              <p>
                Sentra Kuliner adalah Gedung dimana para masyarakat bisa berjualan olahan masakan mereka dan dijual bahkan bisa dipromosikan ke luar kota Pekalongan, serta tempat makan untuk para wisatawan luar Pekalongan.
              </p>
              <div class="text-center text-lg-start">
                <a href="<?php echo base_url(); ?>auth/registrasi" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Daftar Sekarang!</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?php echo base_url() ?>templates/assets/img/sk3.jpeg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Fasilitas</h2>
          <p>Fasilitas Yang Disediakan Oleh Gedung Sentra Kuliner</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="<?php echo base_url() ?>templates/assets/img/toilet.png" class="img-fluid" alt="">
              <h3>Toilet Bersih</h3>
              <p>Sentra Kuliner Menyediakan Toilet Bersih untuk Digunakan Masyarakat.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="<?php echo base_url() ?>templates/assets/img/pray.png" class="img-fluid" alt="">
              <h3>Musholla</h3>
              <p>Sentra Kuliner Menyediakan Tempat Beribadah Yang Bersih, Tenang dan Sejuk.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="<?php echo base_url() ?>templates/assets/img/fish.png" class="img-fluid" alt="">
              <h3>Kolam Ikan</h3>
              <p>Kolam ikan menciptakan latar belakang suara yang tenang hingga visual yang menarik dan air membawa kesehatan, keindahan, dan harmoni ke lingkungan hidup.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-person-check"></i>
              <div>
                <?php $jumlah_staff = $this->model_staff->tampil_data('staff')->num_rows(); ?>
                <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah_staff; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Staff</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-person-plus" style="color: #ee6c20;"></i>
              <div>
                <?php $jumlah_pendaftar = $this->model_pendaftar->tampil_data('pendaftar')->num_rows(); ?>
                <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah_pendaftar; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Pendaftar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-shop" style="color: #15be56;"></i>
              <div>
                <?php $jumlah_kios = $this->model_pemilik->tampil_kios('kios')->num_rows(); ?>
                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                <p>Jumlah Kios</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <?php $jumlah_pemilik = $this->model_pemilik->tampil_data('pemilik')->num_rows(); ?>
                <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah_pemilik; ?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Pemilik Kios</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Kios Sentra Kuliner</h2>
          <p>Daftar Kios Sentra Kuliner Ikan</p>
        </header>


        <div class="card-body">
          <div class="">
            <table class="table table-striped table-bordered text-center" id="dataTablecs" width="100%" cellspacing="0">
             <thead>
                <tr>
                   <td>No Kios.</td>
                   <td>Nama Pemilik</td>
                   <td>Slogan</td>
                   <td>Nama Kios</td>
                   <td>Aksi</td>
                 </tr>
               </thead>
              <tbody>
                <?php 
                foreach($pemilik as $pemilik) : ?>
                  <tr>
                   <td><?php echo $pemilik->nokios ?></td>
                   <td><?php echo $pemilik->nama ?></td>
                   <td><?php echo $pemilik->slogan ?></td>
                   <td><?php echo $pemilik->namakios ?></td>
                   <td>
                   <a href="<?= base_url(); ?>home/detail_pemilik/<?= $pemilik->id?>" class="btn-circle btn-success btn-sm" target="_blank"><i class="fa fa-info-circle" title="Detail"></i></a>
                   </td>
                  </tr>
                <?php endforeach; ?>                                          
              </tbody>
            </table>
          </div>
        </div>


<!--         <div class="row gy-4">
          <?php foreach ($pemilik as $pemilik) : ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <img src="<?php echo base_url('uploads/foto/profil/') . $pemilik->foto; ?>" class="img-fluid" alt="">
              <h3><?php echo $pemilik->nama ?></h3>
              <p><?php echo $pemilik->slogan ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div> -->
        

      </div>

    </section><!-- End Services Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>FAQ</h2>
          <p>Pertanyaan Yang Sering Diajukan</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Apa itu Sentra Kuliner?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Sentra Kuliner adalah Gedung dimana para masyarakat bisa berjualan olahan masakan mereka dan dijual bahkan bisa dipromosikan ke luar kota Pekalongan, serta tempat makan untuk para wisatawan luar Pekalongan.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Bagaimana Cara Saya bergabung?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                  Klik Daftar Sekarang, Isi Email dan Password yang valid kemudian Aktivasi Akun Anda, setelah itu lengkapi data Anda untuk pengajuan data dan tunggu sekitar 1-2 hari kerja, apabila pengajuan diterima silahkan datang ke Technopark untuk di-wawancarai.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Apa Saja Syarat Pendaftaran Sentra Kuliner?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Syarat Pendaftaran Pemilik Kios Sentra Kuliner Yaitu : Fotokopi KTP/KK dan NPWP (apabila ada).
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6">

            <!-- F.A.Q List 2-->
            <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Bagaimana Cara Saya Keluar Dari Sentra Kuliner
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Untuk para pemilik Kios, cara berhenti menjadi menjadi pemilik kios cukup ajukan permohonan ke Gedung Technopark.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Apa Saja Fasilitas Yang Disediakan Di Sentra Kuliner?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Gedung Sentra Kuliner sendiri memiliki beberapa Fasilitas yaitu : tempat parkir luas, Kolam Ikan, Musholla, dan Toilet Bersih.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Apakah Pendaftaran Berbayar?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Semua Pendaftaran tidak dipungut biaya seperserpun, Waspada terhadap penipuan yang mengatasnamakan pihak Technopark Perikanan Kota Pekalongan dengan meminta sejumlah uang terkait Pendaftaran. Dan kami tidak bertanggung jawab atas Hal tersebut.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Portfolio</h2>
          <p>Foto Sentra Kuliner</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Serba Seafood</li>
              <li data-filter=".filter-card">Gule Manyung</li>
              <li data-filter=".filter-web">Sentra Kuliner</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>templates/assets/img/portfolio/seafood.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Serba Seafood Bu Endang</h4>
                <p>Serba Seafood</p>
                <div class="portfolio-links">
                  <a href="<?php echo base_url() ?>templates/assets/img/portfolio/seafood.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Serba Seafood Bu Endang"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>templates/assets/img/portfolio/kolam.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kolam Ikan</h4>
                <div class="portfolio-links">
                  <a href="<?php echo base_url() ?>templates/assets/img/portfolio/kolam.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="kolam Ikan"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>templates/assets/img/portfolio/serba.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Serba Seafood</h4>
                <p>Serba Seafood</p>
                <div class="portfolio-links">
                  <a href="<?php echo base_url() ?>templates/assets/img/portfolio/serba.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Serba Seafood"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>templates/assets/img/portfolio/gule.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gule Manyung</h4>
                <p>Gule Manyung Pak Rozi</p>
                <div class="portfolio-links">
                  <a href="<?php echo base_url() ?>templates/assets/img/portfolio/gule.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Gule Manyung Pak Rozi"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>templates/assets/img/portfolio/sentrakuliner.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sentra Kuliner</h4>
                <div class="portfolio-links">
                  <a href="<?php echo base_url() ?>templates/assets/img/portfolio/sentrakuliner.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sentra Kuliner"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>templates/assets/img/portfolio/nelayan.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Warung Bu Wartiah</h4>
                <p>Nelayan Indah</p>
                <div class="portfolio-links">
                  <a href="<?php echo base_url() ?>templates/assets/img/portfolio/nelayan.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Gulai Manyung"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>templates/assets/img/portfolio/pakrozi.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pak Rozi</h4>
                <p>Kios Pak Rozi</p>
                <div class="portfolio-links">
                  <a href="<?php echo base_url() ?>templates/assets/img/portfolio/pakrozi.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Kios Pak Rozi"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>templates/assets/img/portfolio/gulem.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Gulai Manyung</h4>
                <p>Gulai Manyung</p>
                <div class="portfolio-links">
                  <a href="<?php echo base_url() ?>templates/assets/img/portfolio/gulem.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Gulai Manyung"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>templates/assets/img/portfolio/gedung.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sentra Kuliner Ikan</h4>
                <div class="portfolio-links">
                  <a href="<?php echo base_url() ?>templates/assets/img/portfolio/gedung.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sentra Kuliner Ikan"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>Staff Pengurus Sentra Kuliner</p>
        </header>

        <div class="row gy-4">
          <?php foreach ($staff as $staff) : ?>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo base_url('uploads/foto/profil/') . $staff->foto ?>" class="img-fluid" alt="Foto" style="width:250px;height:250px;">
              </div>
              <div class="member-info">
                <h4><?php echo $staff->nama ?></h4>
                <span><?php echo $staff->alamat ?></span>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <!-- End Clients Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Berita</h2>
          <p>Berita dan Pengumuman Terbaru</p>
        </header>

        <div class="row">   
          <?php foreach ($berita as $berita) : ?>
            <div class="col-lg-4">
              <div class="post-box">
                <div class="post-img"><img src="<?php echo base_url('uploads/foto/berita/') . $berita->gambar ?>" width="300" height="200"></div>
                <h3 class="post-title"><?php echo $berita->judul ?></h3>
                <span class="post-date"><?= date('d F Y H:i:s', $berita->tglterbit); ?> - <?= $berita->kategori ?></span>
                <a href="<?= base_url(); ?>home/baca/<?= $berita->id?>" class="readmore stretched-link mt-auto" target="_blank"><span>Baca Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          <?php endforeach;?>
        </div>

      </div>

    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Kontak</h2>
          <p>Kritik dan Saran</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <p>Jln. Wr. Supratman No.18, Karangsarirejo, Panjang Wetan, Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51141</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Telepon</h3>
                  <p>+62 852-2967-5229<br>+62 819-5852-8582</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>pekalongantechnopark@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Jam Buka</h3>
                  <p>Senin - Minggu<br>9:00 - 22:00</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form method="post" action="<?= site_url('home/kirim_pesan')?>">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flashhome'); ?>"></div>
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="email"></label>
                  <input type="email" name="email" class="form-control" placeholder="Email Anda" id="email" required>
                </div>

                <div class="col-md-6">
                  <label for="nama"></label>
                  <input type="nama" name="nama" class="form-control" placeholder="Nama Anda" id="nama" required>
                </div>

                <div class="col-md-12">
                  <label for="subjek"></label>
                  <input type="text" class="form-control" name="subjek" placeholder="Subjek" id="subjek" required>
                </div>

                <div class="col-md-12">
                  <label for="isipesan"></label>
                  <textarea class="form-control" name="isipesan" rows="6" placeholder="Isi Pesan" id="isipesan" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->
    <section>
        <header class="section-header">
          <p>Maps</p>
        </header>
      <div class="text-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d588.8424533513161!2d109.69013071626725!3d-6.861326135340217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7025283e0ea9dd%3A0x9e128dd57901c481!2sSentra%20Kuliner%20Ikan%20Kota%20Pekalongan!5e0!3m2!1sid!2sid!4v1639976077848!5m2!1sid!2sid" width="800" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
