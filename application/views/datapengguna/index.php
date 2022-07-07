<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Data Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Data Users</li>
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
          <h3 class="card-title">Data Users</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Username</th>
                            <th>Password (Encrypted)</th>
                            <th>Email</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($list_users as $obj) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $obj->username ?></td>
                                <td><?= $obj->password ?></td>
                                <td><?= $obj->email ?></td>
                                <td><a class ='btn btn-primary' href="view?id=<?=$obj->id?>"><i class="fa fa-search-plus"></i> Detail</a></td>
                                <td><a class ='btn btn-warning' href="edit?id=<?=$obj->id?>"><i class="fa fa-edit"></i> Edit</a></td>
                                <td><a class ='btn btn-danger' href="delete?id=<?=$obj->id?> "onclick="if(!confirm('Anda Yakin Hapus Username <?=$obj->username?>')){return false}"><i class="fa fa-trash"></i> Delete</a></td>
                                

                            </tr>
                        <?php
                            $nomor++;
                        }
                        ?>


                    </tbody>
                </table>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>