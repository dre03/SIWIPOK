<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Komentar Masuk</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Komentar masuk</li>
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
      </div>
      <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <!-- <th>Username</th> -->
              <th>Nama Wisata</th>
              <th>isi</th>
              <!-- <th>Rating</th> -->
              <th colspan="2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($komentar as $komen) : ?>
              <tr>

                <td><?php echo $no++ ?></td>
                <td><?php echo $komen->tanggal ?></td>
                <td><?php echo $komen->nama_tempat ?></td>
                <td><?php echo $komen->isi ?></td>

                <td>
                  <?php echo anchor(
                    '/komentar/detail/' . $komen->id,
                    '<button class="btn btn-primary"><i class="nav-icon fas fa-search-plus"></i> Detail</button>'
                  ) ?>
                </td>
                <td onclick="javascript: return confirm('Anda Yakin ingin Menghapus')">
                  <?php echo anchor(
                    '/komentar/hapus/' . $komen->id,
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
</div>