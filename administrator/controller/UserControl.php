<?php 
/**
* 
*/
include_once 'Controller.php';
	class UserControl extends Controller
	{
		

		public function tambahDataUser()
		{
			include_once 'model/User.php';
			$muser = new User();
			$nama_user = $_POST['nama_user'];
			$jabatan = $_POST['jabatan'];
			$alamat = $_POST['alamat'];
			$jenis_kelamin = $_POST['JenisKelamin'];
			$no_telepon = $_POST['no_telepon'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			// var_dump($_POST);
			$pesan = $muser->tambahDataUser($nama_user,$jabatan,$alamat,$jenis_kelamin,$no_telepon,$username,$password);
			return $pesan;
		}


		public function editPelanggan($nama_user,$jabatan,$alamat,$jenis_kelamin,$no_telepon,$username,$password)
			{
				include_once 'model/User.php';
			}

		public function deletePelanggan($nama_user,$jabatan,$alamat,$jenis_kelamin,$no_telepon,$username,$password)
			{
				include_once 'model/User.php';
			}
			
	}
 ?> 