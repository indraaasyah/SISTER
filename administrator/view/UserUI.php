<?php 

require_once 'View.php';
/**
* 
*/
class UserUI extends ViewAdmin
{
	
	public function editDataUser()
	{
		include_once 'controller/UserControl.php';
		include_once 'model/User.php';

		$usr = new UserControl();

		$data_user = $usr-> tambahDataUser();

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

		$data_user = $usr-> tampilDataUser();

		include_once 'pages/lihatdatauser.php';
		$this->end();
	}

	public function tambahDataUser()
	{
		include_once 'controller/UserControl.php';

		$usr = new UserControl();

		$data_user = $usr-> tambahDataUser();

		include_once 'pages/formtambahuser.php';
		$this->end();
	}
}



 ?>