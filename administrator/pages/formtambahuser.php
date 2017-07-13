<div class="col-md-10" id="side-right">
                <div class="row">   
                    <div class="col-lg-10">
                        <h1 class="page-header">Tambah User</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10">
                        <form class="form-horizontal" action="tambah_user.php"  role="form" method="POST">
                            <div class="form-group">
                                <label for="inputid" class="col-sm-2 control-label">Id_User</label>
                                <div class="col-sm-10">
                                    <input name="id_user" class="form-control" id="inputid" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputnama" class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input name="nama_user" class="form-control" id="inputnama" placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputjabatan" class="col-sm-2 control-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input name="jabatan" class="form-control" id="inpujabatan" placeholder="Jabatan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputalamat" class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="alamat" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jeniskelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                        <input type="radio" name="JenisKelamin" id="jk11" value="Pria">Pria
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="JenisKelamin" id="jk2" value="Wanita">Wanita
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputtelepon" class="col-sm-2 control-label">No. Telepon</label>
                                <div class="col-sm-10">
                                    <input name="no_telepon" class="form-control" id="inputtelepon" placeholder="No. Telepon">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input name="username" class="form-control" id="username" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input name="password" class="form-control" id="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3 col-md-offset-10">
                                        <button type="submit" class="btn btn-default">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>