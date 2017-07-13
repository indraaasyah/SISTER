<?php 
/**
* 
*/
include_once 'Controller.php';
class PelangganControl extends Controller
{
	

	public function tambahDataPelanggan()
	{
		include_once 'model/Pelanggan.php';
		$mpelanggan = new Pelanggan();
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['JenisKelamin'];
		$nama_barang = $_POST['nama_barang'];
		$keluhan = $_POST['keluhan'];
		$no_telepon = $_POST['no_telepon'];
		$pesan = $mpelanggan->tambahDataPelanggan($nama,$alamat,$jenis_kelamin,$nama_barang,$keluhan,$no_telepon);
		return $pesan;
	}
	
}
 ?>