<div class="col-md-10" id="side-right">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="page-header">Data User</h1>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3 col-md-offset-7">
                        <a href="tambahuser.html">
                            <button type="button" class="btn btn-primary">Tambah User</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
<?php 
$i=1; foreach ($data_user as $du) { ?>                            
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $du['nama_user'] ?></td>
                                    <td>
                                        <a href="lihat_user.php">
                                            <button type="button" class="btn btn-primary">Lihat</button>
                                        </a>
                                        <a href="edit_user.html">
                                            <button type="button" class="btn btn-warning">Edit</button>
                                        </a>
                                        <a href="datauser1.html">
                                            <button type="button" class="btn btn-danger" id="logout" onclick="getConfirmation();">Hapus</button>
                                        </a>
                                    </td>
                                </tr>
                                
<?php }
$i++;
 ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>