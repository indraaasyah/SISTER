<div class="col-md-10" id="side-right">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="page-header">Tambah Pelanggan</h1>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-sm-10">
                        <form class="form-horizontal" action="tambah_pelanggan.php" method="POST" role="form">
                            <div class="form-group">
                                <label for="inputid" class="col-sm-2 control-label">Id_Pelanggan</label>
                                <div class="col-sm-10">
                                    <input name="id_pelanggan" class="form-control" id="inputid" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputnama" class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input name="nama" class="form-control" id="inputnama" value="">
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
                                <label for="inputbarang" class="col-sm-2 control-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <input name="nama_barang" class="form-control" id="inputbarang" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keluhankerusakan" class="col-sm-2 control-label">Keluhan Kerusakan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="keluhan" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputtelepon" class="col-sm-2 control-label">No. Telepon</label>
                                <div class="col-sm-10">
                                    <input name="no_telepon" class="form-control" id="inputtelepon" value="">
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