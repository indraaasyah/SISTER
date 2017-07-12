<?php 

require_once 'View.php';
/**
* 
*/
class UserUI extends ViewAdmin
{
	
	public function editDataUser()
	{
			//include_once 'controller/PelangganControl.php';

		//$bm = new PelangganControl();
//		$pesan = $bm->tambahDataPelanggan();

		include_once 'pages/formedituser.php';
		$this->end();
	}

	public function lihatDetailUser()
	{
		include_once 'model/User.php';

		$usr = new User();

		$data_user = $usr-> tampilDetailUser();

		include_once 'pages/lihatuser.php';
		$this->end();
	}

	public function lihatDataUser()
	{
		include_once 'model/User.php';

		$usr = new User();

		include_once'pages/lihatdatauser.php';
		$this->end();
	}
}



 ?>