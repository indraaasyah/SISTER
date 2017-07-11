<?php 
/**
* 
*/
include_once 'Controller.php';
class PelangganControl extends Controller
{
	

	public function tambahDataPelanggan()
	{
		include_once 'model/Berita.php';
		$mberita = new Berita();
		$tanggal = date('Y-m-d');
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$id_kategori = $_POST['kategori'];
		$pesan = $mberita->tambahDataPelanggan($tanggal,$judul,$isi,$id_kategori);
		return $pesan;
	}
}
 ?>