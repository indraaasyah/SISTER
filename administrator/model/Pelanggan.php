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
	
 
	public function tambahDataPelanggan($nama,$alamat,$jenis_kelamin,$nama_barang,$keluhan,$no_telepon)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO pelanggan(nama,alamat,jenis_kelamin,nama_barang,keluhan,no_telepon) VALUES(:nama, :alamat, :jenis_kelamin, :nama_barang, :keluhan, :no_telepon)");
		   $stmt->bindparam(":nama",$nama);
		   $stmt->bindparam(":alamat",$alamat);
		   $stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
		   $stmt->bindparam(":nama_barang",$nama_barang);
		   $stmt->bindparam(":keluhan",$keluhan);
		   $stmt->bindparam(":no_telepon",$no_telepon);
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