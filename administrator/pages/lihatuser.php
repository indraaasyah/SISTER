
<div class="col-md-10" id="side-right">
                <div class="row">
                    <div class="col-lg-3">
                        <h1 class="page-header">Detail User</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                    </div>
                </div>
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <div class="col-sm-8">
                            <table class="table table-bordered">
                                <tbody>
<?php foreach ($data_user as $du) { ?>
                                    <tr>
                                        <td>Id_User</td>
                                        <td><?= $du['id_user'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td><?= $du['nama_user'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jabatan</td>
                                        <td><?= $du['jabatan'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td><?= $du['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td><?= $du['jenis_kelamin'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telepon</td>
                                        <td><?= $du['no_telepon'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td><?= $du['username'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td><?= $du['password'] ?></td>
                                    </tr>
<?php } ?>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <div class="col-md-3 col-md-offset-10">
                                    <a href="datauser.html">
                                        <button type="button" class="btn btn-default">Kembali</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
