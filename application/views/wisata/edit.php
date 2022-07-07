<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form edit Data Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('wisata/index') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Edit data</li>
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
                <h3 class="card-title">Form Edit</h3>
            </div>
            <div class="card-body">
                <?php foreach ($wisata as $wst) { ?>
                    <?php echo form_open_multipart('wisata/update'); ?>
                    <div class="form-group row">
                        <label for="text" class="col-4 col-form-label">Nama Wisata</label>
                        <div class="col-8">
                            <input id="id" name="id" type="hidden" value="<?= $wst->id ?>" class="form-control">
                            <input id="text" name="nama" type="text" value="<?= $wst->nama ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis_wisata" class="col-4 col-form-label">Jenis Wisata</label>
                        <div class="col-8">
                            <select id="jenis_wisata" name="jenis_wisata" class="custom-select">
                                <?php
                                foreach ($jenis as $jns) { ?>
                                    <option value='<?= $jns->id ?>' <?php if ($jns->id == $wst->jenis_id) {
                                                                        echo 'selected';
                                                                    } ?>><?= $jns->nama ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_tiket" class="col-4 col-form-label">Harga Tiket</label>
                        <div class="col-8">
                            <input id="harga_tiket" name="harga_tiket" type="text" value="<?= $wst->harga_tiket ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fasilitas" class="col-4 col-form-label">Fasilitas</label>
                        <div class="col-8">
                            <textarea id="fasilitas" name="fasilitas" cols="40" rows="5" class="form-control"><?php echo $wst->fasilitas ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"><?php echo $wst->deskripsi ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-4 col-form-label">Alamat</label>
                        <div class="col-8">
                            <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"><?php echo $wst->alamat ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kecamatan" class="col-4 col-form-label">Kecamatan</label>
                        <div class="col-8">
                            <select id="kecamatan" name="kecamatan" class="custom-select">
                                <?php
                                foreach ($kecamatan as $kec) { ?>
                                    <option value='<?= $kec->id ?>' <?php if ($kec->id == $wst->kecamatan_id) {
                                                                        echo 'selected';
                                                                    } ?>><?= $kec->nama ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="website" class="col-4 col-form-label">Website</label>
                        <div class="col-8">
                            <input id="website" name="website" type="text" value="<?= $wst->website ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ft1" class="col-4 col-form-label">Foto 1</label>
                        <div class="col-8">
                            <input id="ft1" name="foto1" type="file"class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ft2" class="col-4 col-form-label">Foto 2</label>
                        <div class="col-8">
                            <input id="ft2" name="foto2" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ft3" class="col-4 col-form-label">Foto 3</label>
                        <div class="col-8">
                            <input id="ft3" name="foto3" type="file" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi" class="col-4 col-form-label">Lokasi (latlong)</label>
                        <div class="col-8">
                            <div id="googleMap" style="width:100%;height:380px;"></div>
                            <div class="input-group mt-2">
                                <div class="input-group-prepend">
                                </div>
                                <span>Latitude:</span><input type="text" id="lat" name="lat" value="<?= $wst->lat ?>" class="mr-4">
                                <span>Longitude:</span><input type="text" id="lng" name="lng" value="<?= $wst->long ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="reset" type="reset" class="btn btn-danger">Reset</button>
                            <button name="submit" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                    <?php form_close(); ?>
                <?php } ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    // variabel global marker
    var marker;

    function taruhMarker(peta, posisiTitik) {

        if (marker) {
            // pindahkan marker
            marker.setPosition(posisiTitik);
        } else {
            // buat marker baru
            marker = new google.maps.Marker({
                position: posisiTitik,
                map: peta
            });
        }

        // isi nilai koordinat ke form
        document.getElementById("lat").value = posisiTitik.lat();
        document.getElementById("lng").value = posisiTitik.lng();

    }

    function initialize() {
        var propertiPeta = {
            center: new google.maps.LatLng(<?= $wst->lat ?>, <?= $wst->long ?>),
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        // membuat Marker
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(<?= $wst->lat ?>, <?= $wst->long ?>),
            map: peta,
            animation: google.maps.Animation.BOUNCE
        });

        // even listner ketika peta diklik
        google.maps.event.addListener(peta, 'click', function(event) {
            taruhMarker(this, event.latLng);
        });
        marker.taruhMarker(this, event.latLng)

    }


    // event jendela di-load  
    google.maps.event.addDomListener(window, 'load', initialize);
</script>