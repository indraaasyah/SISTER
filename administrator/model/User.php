<?php 

/**
* 
*/

include_once 'Model.php';
class User extends Model
{

		public $id_user;
		public $nama;
		public $jabatan;
		public $alamat;
		public $jeniskelamin;
		public $no_telepon;
		public $username;
		public $password;
	
 
	public function tampilDetailUser()
	{
		$query = $this->db->prepare("SELECT * FROM user");
    	$query->execute();
    	$data = $query->fetchAll();

     	return $data;
	}

	public function tampilDataUser()
	{
		$query = $this->db->prepare("SELECT * FROM user");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

	public function tambahDataUser($nama_user,$jabatan,$alamat,$jenis_kelamin,$no_telepon,$username,$password)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO user(nama_user,jabatan,alamat,jenis_kelamin,no_telepon,username,password) VALUES(:nama_user, :jabatan, :alamat, :jenis_kelamin, :no_telepon, :username, :password)");
		   $stmt->bindparam(":nama_user",$nama_user);
		   $stmt->bindparam(":jabatan",$jabatan);
		   $stmt->bindparam(":alamat",$alamat);
		   $stmt->bindparam(":jenis_kelamin",$jenis_kelamin);
		   $stmt->bindparam(":no_telepon",$no_telepon);
		   $stmt->bindparam(":username",$username);
		   $stmt->bindparam(":password",$password);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}

	public function editDataUser()
	{
		
	}

}


 ?>