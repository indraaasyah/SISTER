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

		$plg = new PelangganControl();
		$data_pelanggan = $plg->tambahDataPelanggan();

		include_once 'pages/formtambahpelanggan.php';
		$this->end();
	}
}



 ?>