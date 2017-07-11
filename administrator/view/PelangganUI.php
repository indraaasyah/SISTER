<?php 

require_once 'View.php';
/**
* 
*/
class PelangganUI extends View
{
	
	public function inputDataPelanggan()
	{
			include_once 'controller/PelangganControl.php';

		$bm = new PelangganControl();
//		$pesan = $bm->tambahDataPelanggan();

		include_once 'pages/formtambahpelanggan.php';
		$this->end();
	}
}



 ?>