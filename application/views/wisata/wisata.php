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
      center: new google.maps.LatLng(-6.404511399733215, 106.79917327104017),
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

    // even listner ketika peta diklik
    google.maps.event.addListener(peta, 'click', function(event) {
      taruhMarker(this, event.latLng);
    });

  }


  // event jendela di-load  
  google.maps.event.addDomListener(window, 'load', initialize);
</script>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Wisata</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Wisata</li>
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
        <button class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-plus"></i>
          Data Wisata</button>
      </div>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Wisata</th>
              <th>Jenis Wisata</th>
              <th>Harga Tiket</th>
              <th>Rating</th>
              <th>website</th>
              <th colspan="3">Aksi</th>
              <!-- <th>Kecamatan</th> -->
              <!-- <th>Fasilitas</th>
                        <th>Latlong</th>
                        <th>Foto1</th>
                        <th>Foto2</th>
                        <th>Foto3</th> -->
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($wisata as $wst) : ?>
              <tr>

                <td><?php echo $no++ ?></td>
                <td><?php echo $wst->nama ?></td>
                <td><?php echo $wst->jenis ?></td>
                <td><?php echo $wst->harga_tiket ?></td>
                <td><?php echo $wst->skor_rating ?></td>
                <td><?php echo $wst->website ?></td>

                <td>
                  <?php echo anchor(
                    'wisata/detail/' . $wst->id,
                    '<button class="btn btn-primary"><i class="nav-icon fas fa-search-plus"></i> Detail</button>'
                  ) ?>
                </td>
                <td><?php echo anchor(
                      'wisata/edit/' . $wst->id,
                      '<button class="btn btn-warning"><i class="nav-icon fas fa-edit"></i> Edit</button>'
                    ) ?>
                </td>
                <td onclick="javascript: return confirm('Anda Yakin ingin Menghapus')">
                  <?php echo anchor(
                    'wisata/hapus/' . $wst->id,
                    '<button class="btn btn-danger"><i class="nav-icon fas fa-trash"></i> Delete</button>'
                  ) ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </section>
  <!-- /.content -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Input Wisata</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo form_open_multipart('wisata/tambah_data'); ?>
          <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Nama Wisata</label>
            <div class="col-8">
              <input id="text" name="nama" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="jenis_wisata" class="col-4 col-form-label">Jenis Wisata</label>
            <div class="col-8">
              <select id="jenis_wisata" name="jenis_wisata" class="custom-select">
                <?php
                foreach ($jenis as $jns) { ?>
                  <option value='<?= $jns->id ?>'><?= $jns->nama ?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="harga_tiket" class="col-4 col-form-label">Harga Tiket</label>
            <div class="col-8">
              <input id="harga_tiket" name="harga_tiket" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="fasilitas" class="col-4 col-form-label">Fasilitas</label>
            <div class="col-8">
              <textarea id="fasilitas" name="fasilitas" cols="40" rows="5" class="form-control"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
            <div class="col-8">
              <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label>
            <div class="col-8">
              <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="kecamatan" class="col-4 col-form-label">Kecamatan</label>
            <div class="col-8">
              <select id="kecamatan" name="kecamatan" class="custom-select">
                <?php
                foreach ($kecamatan as $kec) { ?>
                  <option value='<?= $kec->id ?>'><?= $kec->nama ?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="website" class="col-4 col-form-label">Website</label>
            <div class="col-8">
              <input id="website" name="website" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
              <label for="ft1" class="col-4 col-form-label">Foto 1</label>
              <div class="col-8">
                <input id="ft1" name="foto1" type="file" class="form-control">
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
                <span>Latitude:</span><input type="text" id="lat" name="lat" value="" class="mr-4">
                <span>Longitude:</span><input type="text" id="lng" name="lng" value="">
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="reset" type="reset" class="btn btn-danger">Reset</button>
              <button name="submit" type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.content-wrapper -->