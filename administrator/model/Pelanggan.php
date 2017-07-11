<?php 

/**
* 
*/

include_once 'Model.php';
class Pelanggan extends Model
{

		public $nama;
		public $alamat;
		public $jeniskelamin;
		public $nama_barang;
		public $keluhan;
		public $no_telepon;
	

	public function setBerita($tanggal,$judul,$isi,$id_kategori)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO berita(tanggal,judul,isi,id_kategori) VALUES(:tanggal, :judul, :isi, :id_kategori)");
		   $stmt->bindparam(":tanggal",$tanggal);
		   $stmt->bindparam(":judul",$judul);
		   $stmt->bindparam(":isi",$isi);
		   $stmt->bindparam(":id_kategori",$id_kategori);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}

}


 ?>