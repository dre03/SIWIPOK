 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1>Detail Komentar</h1>
                 </div>
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="<?php echo base_url('komentar/index') ?>">Home</a></li>
                         <li class="breadcrumb-item active">komentar</li>
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
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-md">
                             <table class="table">
                                 <tr>
                                     <th>Tanggal</th>
                                     <td><?php echo $detail[0]->tanggal; ?></td>
                                 </tr>
                                 <tr>
                                     <th>Username</th>
                                     <td><?php echo $detail[0]->username; ?></td>
                                 </tr>
                                 <tr>
                                     <th>Nama Wisata</th>
                                     <td><?php echo $detail[0]->nama_tempat; ?></td>
                                 </tr>
                                 <tr>
                                     <th>Rating</th>
                                     <td><?php echo $detail[0]->rating; ?></td>
                                 </tr>
                                 <tr>
                                    <th>Komentar</th>
                                    <td><?php echo $detail[0]->isi; ?></td>
                                 </tr>
                             </table>
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