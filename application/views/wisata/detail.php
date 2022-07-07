 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Detail Wisata</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="<?php echo base_url('wisata/index') ?>">Home</a></li>
                         <li class="breadcrumb-item active">Detail</li>
                     </ol>
                 </div>
             </div>
         </div><!-- /.container-fluid -->
     </section>
     <!-- Main content -->
     <section class="content">
         <!-- Default box -->
         <div class="card">
             <div class="card-header bg-success">
                 <h3 class="card-title">Wisata <?php echo $detail[0]->nama ?></h3>
             </div>
             <div class="card-body">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-md-6">
                             <table class="table">
                                 <tr>
                                     <th>Nama</th>
                                     <td><?php echo $detail[0]->nama ?></td>
                                 </tr>
                                 <tr>
                                     <th>Jenis Wisata</th>
                                     <td><?php echo $detail[0]->jenis ?></td>
                                 </tr>
                                 <tr>
                                     <th>Harga Tiket</th>
                                     <td>Rp. <?php echo $detail[0]->harga_tiket ?></td>
                                 </tr>
                                 <tr>
                                     <th>Rating</th>
                                     <td><?php echo $detail[0]->skor_rating ?></td>
                                 </tr>
                                 <tr>
                                    <th>Fasilitas</th>
                                    <td><?php echo $detail[0]->fasilitas?></td>
                                 </tr>
                                 <tr>
                                    <th>Deskripsi</th>
                                    <td><?php echo $detail[0]->deskripsi?></td>
                                 </tr>
                                 <tr>
                                     <th>Website</th>
                                     <td><?php echo $detail[0]->website ?></td>
                                 </tr>
                                 <tr>
                                     <th>Alamat</th>
                                     <td><?php echo $detail[0]->alamat ?></td>
                                 </tr>
                                 <tr>
                                     <th>Kecamatan</th>
                                     <td><?php echo $detail[0]->kecamatan ?></td>
                                 </tr>
                             </table>
                         </div>
                         <div class="col-md-6">
                             <table>
                                 <tr>
                                     <th>Lokasi</th>
                                 </tr>
                                 <tr>
                                     <td><?php echo $detail[0]->lat ?>,<?php echo $detail[0]->long ?>
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

                                             <div id="googleMap" style="width:500px;height:400px;"></div>
                                         </div>
                                     </td>
                                 </tr>
                             </table>
                         </div>
                         <div class="row mt-5 d-flex justify-content-between">
                             <div class="col-md-4">
                                <img src="<?php echo base_url(); ?>assets/dist/upload/<?= $detail[0]->foto1; ?>" alt="gambar tidak ada" width="320" height="220">
                            </div>
                            <div class="col-md-4">
                            <img src="<?php echo base_url(); ?>assets/dist/upload/<?= $detail[0]->foto2; ?>" alt="gambar tidak ada" width="320" height="220">
                             </div>
                             <div class="col-md-4">
                             <img src="<?php echo base_url(); ?>assets/dist/upload/<?= $detail[0]->foto3; ?>" alt="gambar tidak ada" width="320" height="220">
                             </div>
                         </div>
                     </div>

                 </div>
                 <!-- /.card-body -->
             </div>
             <!-- /.card -->

     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->