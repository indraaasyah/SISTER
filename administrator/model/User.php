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

}


 ?>