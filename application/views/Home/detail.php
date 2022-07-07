<?php
if ($this->session->userdata('ROLE') == "administrator") {
    redirect(base_url() . 'index.php/Admin');
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Detail Wisata</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/assets/css/animate.css') ?>">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/assets/css/magnific-popup.css') ?>">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/aassets/css/slick.css') ?>">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/assets/css/LineIcons.css') ?>">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/assets/css/font-awesome.min.css') ?>">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/assets/css/bootstrap.min.css') ?>">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/assets/css/default.css') ?>">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?php echo base_url('assetshome/assets/css/style.css') ?>">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url('Home/home') ?>">Daftar Wisata</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Wisata</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

    </header>

    <!--====== HEADER PART ENDS ======-->


    <!--====== BRAMD PART ENDS ======-->

    <!--====== SERVICES PART START ======-->

    <!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                    </div>
                    <div class="single-testimonial">
                        <h2><?php echo $detail[0]->nama ?></h2>
                        <div class="testimonial-review d-flex align-items-center justify-content-between">

                            <div class="star">
                                <ul>
                                    <li><b> Rating : <?= $detail[0]->skor_rating ?></b></li>
                                    <!-- <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li> -->
                                    <?php
                                        if($detail[0]->skor_rating < 2){
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                        }else if($detail[0]->skor_rating >= 2 AND $detail[0]->skor_rating < 3){
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                        }else if($detail[0]->skor_rating >= 3 AND $detail[0]->skor_rating < 4){
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                        }else if($detail[0]->skor_rating >= 4 AND $detail[0]->skor_rating < 5){
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                        }else if($detail[0]->skor_rating >= 5){
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                        }                             
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text"><?php echo "Deskripsi : " . $detail[0]->deskripsi ?></p>
                            <p class="text"><?php echo "Fasilitas : " . $detail[0]->fasilitas ?></p>
                            <p class="text"><?php echo "Jenis Wisata : " . $detail[0]->jenis ?></p>
                            <p class="text"><?php echo "Harga Tiket : " . $detail[0]->harga_tiket ?></p>
                            <p class="text"><?php echo "Website : " . $detail[0]->website ?></p>
                            <p class="text"><?php echo "Alamat : " . $detail[0]->alamat ?></p>
                            <p class="text"><?php echo "Kecamatan : " . $detail[0]->kecamatan ?></p>

                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-6">
                    <div>
                        <?php echo $detail[0]->lat ?>,<?php echo $detail[0]->long ?>
                        <div>
                            <!-- Menyisipkan library Google Maps -->
                            <script src="http://maps.googleapis.com/maps/api/js"></script>

                            <script>
                                // fungsi initialize untuk mempersiapkan peta
                                function initialize() {
                                    var propertiPeta = {
                                        center: new google.maps.LatLng(<?= $detail[0]->lat ?>,
                                            <?= $detail[0]->long ?>),
                                        zoom: 14,
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                    };

                                    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
                                }

                                // event jendela di-load  
                                google.maps.event.addDomListener(window, 'load', initialize);
                            </script>

                            <div id="googleMap" style="width:600px;height:400px;" class="mt-2"></div>
                        </div>
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="<?php echo base_url('assetshome/assets/images/about-shape-1.svg') ?>" alt="shape">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->



    <!--====== TEAM PART START ======-->

    <section id="team" class="team-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-30">
                        <div class="line m-auto"></div>
                        <h3 class="title">Dokumentasi</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="<?php echo base_url(); ?>assets/dist/upload/<?= $detail[0]->foto1; ?>" alt="gambar tidak ada">
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><?= $detail[0]->nama?></h5>
                            <p class="text">Kota Depok</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="team-image">
                            <img src="<?php echo base_url(); ?>assets/dist/upload/<?= $detail[0]->foto2; ?>" alt="gambar tidak ada">
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><?= $detail[0]->nama?></h5>
                            <p class="text">Kota Depok</p>
                        </div>
                    </div> <!-- single team -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="<?php echo base_url(); ?>assets/dist/upload/<?= $detail[0]->foto3; ?>" alt="gambar tidak ada">
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><?= $detail[0]->nama?></h5>
                            <p class="text">Kota Depok</p>
                        </div>
                    </div> <!-- single team -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEAM PART ENDS ======-->

    <!--====== TESTIMONIAL PART START ======-->

    <section id="testimonial" class="testimonial-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Komentar</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center" data-wow-duration="1s" data-wow-delay="0.8s">
                <?php foreach($komentar as $komen) : ?>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><b>Rating : <?= $komen->nilai_rating_id;?> </b></li>
                                    <?php
                                        if($komen->nilai_rating_id < 2){
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                        }else if($komen->nilai_rating_id >= 2 AND $komen->nilai_rating_id < 3){
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                        }else if($komen->nilai_rating_id >= 3 AND $komen->nilai_rating_id < 4){
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                        }else if($komen->nilai_rating_id >= 4 AND $komen->nilai_rating_id < 4.9){
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                        }else if($komen->nilai_rating_id >= 5){
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                            echo "<li><i class='lni-star-filled'></i></li>";
                                        }                             
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text"><?= $komen->isi;?></p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-content media-body">
                                <h6 class="holder-name"><?= $komen->username;?> </h6>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <?php endforeach; ?>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <!--====== BLOG PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <div class="container">
        <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-lg text-center">
                    <div class="subscribe-content mt-45">
                        <h2 class="subscribe-title">Testimoni & Komentar</span></h2>
                    </div>
                </div>

            </div> <!-- row -->
            <div class="row">
                <div class="col-lg">
                    <?php echo form_open_multipart('komentar/tambah_komen') ?>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Wisata</label>
                        <div class="col-8">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <input readonly id="nama" name="nama" placeholder="" value="<?php echo $detail[0]->nama ?>" type="text" class="form-control">
                                <input type="hidden" name="wisata_id" value="<?php echo $detail[0]->id ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rating" class="col-4 col-form-label">Rating</label>
                        <div class="col-8">
                            <select id="nilai_rating_id" name="nilai_rating_id" class="custom-select" required="required">
                                <option value=1>Jelek</option>
                                <option value=2>Kurang Bagus</option>
                                <option value=3>Biasa Aja</option>
                                <option value=4>Bagus</option>
                                <option value=5>Sangat Bagus</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="isi" class="col-4 col-form-label">Testimoni</label>
                        <div class="col-8">
                            <textarea id="isi" name="isi" cols="40" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-6 col-6">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="<?php echo base_url('assetshome/assets/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/modernizr-3.7.1.min.js') ?>"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?php echo base_url('assetshome/assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assetshome/assets/js/bootstrap.min.js') ?>"></script>

    <!--====== Plugins js ======-->
    <script src="<?php echo base_url('assetshome/assetshome/assets/js/plugins.js') ?>"></script>

    <!--====== Slick js ======-->
    <script src="<?php echo base_url('assetshome/assets/js/slick.min.js') ?>"></script>

    <!--====== Ajax Contact js ======-->
    <script src="<?php echo base_url('assetshome/assets/js/ajax-contact.js') ?>"></script>

    <!--====== Counter Up js ======-->
    <script src="<?php echo base_url('assetshome/assets/js/waypoints.min.js') ?>"></script>
    <script src="<?php echo base_url('assetshome/assets/js/jquery.counterup.min.js') ?>"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?php echo base_url('assetshome/assets/js/jquery.magnific-popup.min.js') ?>"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?php echo base_url('assetshome/assets/js/jquery.easing.min.js') ?>"></script>
    <script src="<?php echo base_url('assetshome/assets/js/scrolling-nav.js') ?>"></script>

    <!--====== wow js ======-->
    <script src="<?php echo base_url('assetshome/assets/js/wow.min.js') ?>"></script>

    <!--====== Particles js ======-->
    <script src="<?php echo base_url('assetshome/assets/js/particles.min.js') ?>"></script>

    <!--====== Main js ======-->
    <script src="<?php echo base_url('assetshome/assets/js/main.js') ?>"></script>

</body>

</html>