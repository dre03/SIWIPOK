<?php
if ($this->session->userdata('ROLE') == "administrator") {
    redirect(base_url() . 'index.php/Admin');
}
?>

<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


    <!-- Preloader section -->

    <div class="preloader">
        <div class="sk-spinner sk-spinner-pulse"></div>
    </div>
    <!-- Navigation section  -->

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <img src="<?= base_url('assetshome/images/logo.png') ?>" alt="" width="50px" height="50px">
                <a href="<?= base_url('Home/home') ?>" class="navbar-brand smoothScroll">SIWIPOK</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#top" class="smoothScroll"><span style="color: #304352;">Home</span></a></li>
                    <li><a href="#about" class="smoothScroll"><span>About</span></a></li>
                    <li><a href="#daftar" class="smoothScroll"><span>Daftar Wisata</span></a></li>
                    <li><a href="#our_team" class="smoothScroll"><span>Our Team</span></a></li>
                    <li><a href="#contact" class="smoothScroll"><span>Contact</span></a></li>
                    <li><a href="#" class="btn" data-toggle="modal" data-target=".bd-example-modal-sm"><span><i class=" fa fa-user "></i> User</span></a></li>
                    <li><a href=" <?php echo base_url('login/logout') ?>" onclick="if(!confirm('Anda Yakin Akan Logout?')){return false}"><span><i class="fa fa-sign-in"></i> Logout</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="card">
                    <h3 class="card-header"></h3>
                    <div class="card-body">
                        <table class="table">
                            <th>Nama User</th>
                            <th>: <?php
                                    if ($this->session->has_userdata('USERNAME')) {
                                        echo $this->session->userdata('USERNAME');
                                        // echo '-' . $this->session->userdata('ROLE');
                                    }
                                    ?></th>
                        </table>
                    </div>
                </div>
                <span>
                </span>
            </div>
        </div>
    </div>
    <!-- Home section -->
    <section id="home">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="wow fadeInUp font-weight-bold" data-wow-delay="0.6s"><b>SISTEM WISATA DEPOK</b></h1>
                    <p class="wow fadeInUp" data-wow-delay="0.9s">wisata Depok menyediakan berbagai wahana seru dan menarik sehingga dapat dinikmati oleh seluruh keluarga
                        SEMUA HAPPY, SEMUA ASIK enjoy with SIWIPOK</p>
                    <a href="<?= base_url('Home/home') ?>" class="smoothScroll btn btn-success btn-lg wow fadeInUp" data-wow-delay="1.2s">Selengkapnya</a>
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
                        <h1><b>WISATA DEPOK</b></h1>
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
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
    </section>
    <!-- Gallery section -->

    <section id="daftar">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title text-center">
                        <h1><b>Daftar Wisata</b></h1>
                        <p>Destinasi wisata pilihan yang berlokasi di kota Depok ini memang terkenal akan keindahannya.</p>
                    </div>
                </div>
                <?php foreach ($wisata as $wst) : ?>
                    <ul class="grid cs-style-4">
                        <li class="col-md-6 col-sm-6">
                            <figure>
                                <div><img src="<?php echo base_url(); ?>assets/dist/upload/<?= $wst->foto1; ?>" alt="gambar tidak ada">
                                </div>
                                <figcaption style="background-color: #1A4D2E;">
                                    <h2><?php echo $wst->nama ?></h2>
                                    <small><?php echo $wst->deskripsi ?></small>
                                    <a href="detail?id=<?= $wst->id ?>" style="background-color:darkorange;">Read More</a>

                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>

    </section>
    <section id="our_team">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="about-thumb text-center">
                        <h1><b>OUR TEAM</b></h1>
                        <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
                            <img src="<?php echo base_url() ?>assetshome/images/and1.png" class="img-responsive img-circle" alt="About">
                            <h2>Andre Apriyana</h2>
                            <span>Student</span><br>
                            <span>0110221111</span>
                        </div>
                        <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
                            <img src="<?php echo base_url() ?>assetshome/images/fad.jpeg" class="img-responsive img-circle" alt="About">
                            <h2>Fadhlurrahman Muhammad Wafii</h2>
                            <span>Student</span><br>
                            <span>0110221116</span>
                        </div>
                        <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
                            <img src="<?php echo base_url() ?>assetshome/images/tri.jpeg" class="img-responsive img-circle" alt="About">
                            <h2>Sulastri</h2>
                            <span>Student</span><br>
                            <span>0110220198</span>
                        </div>
                        <div class="col-md-3 col-sm-4 wow fadeInUp about-img" data-wow-delay="0.6s">
                            <img src="<?php echo base_url() ?>assetshome/images/muz.jpeg" class="img-responsive img-circle" alt="About">
                            <h2>Muzaki Abdullah Irsyad</h2>
                            <span>Student</span><br>
                            <span>0110221094</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact section -->

    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-1 col-md-10 col-sm-12">

                    <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
                    <h1><b>KIRIM PESAN</b></h1>
                    <p>Solusi terbaik dalam Mencari Tempat Wisata Ketika Berlibur Di Kota Depok Ayo Segera Hubungi Kami!!!
                    </p>
                    </div>

                    <form action="" method="post" class="wow fadeInUp" data-wow-delay="0.8s">
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