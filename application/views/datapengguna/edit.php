<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Data Users</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
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
                <h3 class="card-title">Data User</h3>
            </div>
            <div class="card-body">
                <?php 
                    $hidden = ['idedit' =>$usredit->username];
                ?>
                <?php echo form_open('datapengguna/save','',$hidden) ?>
                  
                    <div class="form-group row">
                        <label for="username" class="col-4 col-form-label">Username</label>
                        <div class="col-8">
                            <input id="username" name="username" type="text" class="form-control" value="<?=$usredit->username?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Password" class="col-4 col-form-label">Password</label>
                        <div class="col-8">
                            <input id="password" name="password" type="text" class="form-control" value="<?=$usredit->password?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <input id="email" name="email" type="text" class="form-control" value="<?=$usredit->email?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Status</label>
                        <div class="col-8">
                            <?php
                            $checked_1 = ($usredit->status==1?"checked":"");
                            $checked_0 = ($usredit->status==0?"checked":"");
                            ?>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="status" id="status_0" type="radio" class="custom-control-input" value="0"<?=$checked_0 ?>>
                                <label for="status_0" class="custom-control-label">Non-Aktif</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="status" id="status_1" type="radio" class="custom-control-input" value="1" <?= $checked_1?>>
                                <label for="status_1" class="custom-control-label">Aktif</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Role</label>
                        <div class="col-8">
                            <?php
                            $checked_a = ($usredit->role=="administrator"?"checked":"");
                            $checked_p = ($usredit->role=="public"?"checked":"");
                            ?>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="role" id="role_0" type="radio" class="custom-control-input" value="administrator"<?=$checked_a ?>>
                                <label for="role_0" class="custom-control-label">Administrator</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="role" id="role_1" type="radio" class="custom-control-input" value="public" <?= $checked_p?>>
                                <label for="role_1" class="custom-control-label">Public</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                <?php echo form_close() ?>
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