<?php
if ($this->session->userdata('ROLE') == "administrator") {
  redirect(base_url() . 'index.php/Admin');
} else if ($this->session->userdata('ROLE') == "public") {
  redirect(base_url() . 'Login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <title>wisata depok</title>
  <!--
Snapshot Template
http://www.templatemo.com/tm-493-snapshot

Zoom Slider
https://vegas.jaysalvat.com/

Caption Hover Effects
http://tympanus.net/codrops/2013/06/18/caption-hover-effects/
-->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assetshome/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assetshome/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assetshome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assetshome/css/component.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>/assetshome/css/owl.theme.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assetshome/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assetshome/css/vegas.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assetshome/css/style1.css">

  <!-- Google web font  -->
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

</head>

<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


  <!-- Preloader section -->

  <div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
  </div>


  <!-- Navigation section  -->

  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>
        <a href="<?= base_url('Home') ?>" class="navbar-brand smoothScroll">SIWIPOK</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url('login/index') ?>" class="smoothScroll"><span>Home</span></a></li>
          <li><a href="<?php echo base_url('login/index') ?>" class="smoothScroll"><span>About</span></a></li>
          <li><a href="<?php echo base_url('login/index') ?>" class="smoothScroll"><span>Contact</span></a></li>
          <li><a href="<?php echo base_url('login/index') ?>" class=""><span><i class="fa fa-sign-in" aria-hidden="true"></i> Login</span></a></li>
        </ul>
      </div>
    </div>
  </div>


  <!-- Home section -->

  <section id="home">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">

        <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
          <h1 class="wow fadeInUp font-weight-bold" data-wow-delay="0.6s"><b>Sistem Wisata Depok</b></h1>
          <p class="wow fadeInUp" data-wow-delay="0.9s">wisata Depok menyediakan berbagai wahana seru dan menarik sehingga dapat dinikmati oleh seluruh keluarga
            SEMUA HAPPY, SEMUA ASIK enjoy with SIWIPOK</p>
          <a href="<?= base_url('Login')  ?>" class="smoothScroll btn btn-success btn-lg wow fadeInUp" data-wow-delay="1.2s">Selengkapnya</a>
        </div>

      </div>
    </div>
  </section>


  <!-- About section -->

  <section id="about">
    <div class="container">
      <div class="row">



        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
          <div class="section-title text-center">
            <h1><b>WISATA DEPOK<b /></h1>
            <p>Sudah bukan rahasia lagi, jika Pesona Indonesia selalu menjadi incaran banyak wisatawan mancanegara. Bukan hanya wisatawan biasa,
              melainkan para seleb dan pesohor dunia pun kepincut dengan pesona yang dimiliki Indonesia. Terutama di kota Depok yang indah dengan destinasi wisata sehingga menarik perhatian para wisatawan untuk berkunjung.</p>
          </div>
        </div>

        <!-- team carousel -->
        <div id="team-carousel" class="owl-carousel">
          <?php foreach ($wisata as $wst) : ?>
            <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
              <div class="team-thumb">
                <div class="image-holder">
                  <img src="<?php echo base_url(); ?>assets/dist/upload/<?= $wst->foto1; ?>" alt="gambar tidak ada" class="img-responsive img-circle" alt="Mary" width="200" height="110">
                </div>
                <h2 class="heading"><?php echo $wst->nama ?></h2>
                <a href="<?= base_url('Login')  ?>" class="btn btn-warning">Lihat Selengkapnya</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">

        <div class="col-md-offset-1 col-md-10 col-sm-12">

          <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
            <h1><b>KIRIM PESAN</b></h1>
            <p>Solusi terbaik dalam Mencari Tempat Wisata Ketika Berlibur Di Kota Depok Ayo Segera Hubungi Kami!!!
            </p>
          </div>

          <form action="<?php echo base_url('login/index') ?>" method="post" class="wow fadeInUp" data-wow-delay="0.8s">
            <div class="col-md-6 col-sm-6">
              <input name="name" type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="col-md-6 col-sm-6">
              <input name="email" type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="col-md-12 col-sm-12">
              <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
            </div>
            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
              <input type="submit" class="form-control" value="SEND MESSAGE">
            </div>
          </form>

        </div>

      </div>
    </div>
  </section>
  <!-- Footer section -->
  <footer>
    <div class="container">

      <div class="row">

        <div class="col-md-12 col-sm-12">

          <ul class="social-icon">
            <li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="0.2s"></a></li>
            <li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="0.4s"></a></li>
            <li><a href="#" class="fa fa-linkedin wow fadeInUp" data-wow-delay="0.6s"></a></li>
            <li><a href="#" class="fa fa-instagram wow fadeInUp" data-wow-delay="0.8s"></a></li>
            <li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="1.0s"></a></li>
          </ul>

          <p class="wow fadeInUp" data-wow-delay="1s">Develop By Kelompok 4 TI04 @STT-NF 2022 |
            Design: <a href="https://plus.google.com/+templatemo" title="free css templates" target="_blank">Templatemo</a></p>

        </div>

      </div>

    </div>
  </footer>

  <!-- Back top -->
  <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

  <!-- Javascript  -->
  <script src="<?php echo base_url() ?>assetshome/js/jquery.js"></script>
  <script src="<?php echo base_url() ?>assetshome/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assetshome/js/vegas.min.js"></script>
  <script src="<?php echo base_url() ?>assetshome/js/modernizr.custom.js"></script>
  <script src="<?php echo base_url() ?>assetshome/js/toucheffects.js"></script>
  <script src="<?php echo base_url() ?>assetshome/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assetshome/js/smoothscroll.js"></script>
  <script src="<?php echo base_url() ?>assetshome/js/wow.min.js"></script>
  <script src="<?php echo base_url() ?>assetshome/js/custom.js"></script>

</body>

</html>