<?php 

require_once 'View.php';
/**
* 
*/
class UserUI extends View
{
	
	public function inputDataUser()
	{
			//include_once 'controller/PelangganControl.php';

		//$bm = new PelangganControl();
//		$pesan = $bm->tambahDataPelanggan();

		include_once 'pages/formtambahuser.php';
		$this->end();
	}
}



 ?>